<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;


class EventPageController extends Controller
{

  public function getDb(){
    $factory = (new Factory())
     ->withServiceAccount(__DIR__.'/FirebaseKey.json')
     ->create();
     //get the database
     $database = $factory->getDatabase();

     return $database;
  }

    public function index($day,$month,$year,$name,$id,$serverid){
      $database = $this->getDb();
      $ref1 = $database->getReference('games')
      ->orderByChild('id')
      ->equalTo($id);
      $event = $ref1->getValue();
      foreach ($event as $value) {
        $events[] = $value;
      }

      ///
        $donne = $database->getReference('streamWeb')
        ->orderByChild('id')
        ->equalTo((int)$id);
        $servers = $donne->getValue();
  
        foreach ($servers as $value) {
          $all_servers[] = $value;
        }
        if(!empty($all_servers)){
        foreach($all_servers as $stream){
          $streams = $all_servers[0]['stream'];
        }
      }
      if(!empty($streams)){
        $server = $streams[$serverid];
      }else{
        $server ="";
      }

      return view('eventpage',compact('events'))->with(['eventpagecontroller'=>$this])->with(compact('server'));
    }

    public function getServers($id){
      $database = $this->getDb();

      $donne = $database->getReference('streamWeb')
      ->orderByChild('id')
      ->equalTo((int)$id);
      $servers = $donne->getValue();

      foreach ($servers as $value) {
        $all_servers[] = $value;
      }
      foreach($all_servers as $stream){
        $streams = $all_servers[0]['stream'];
      }
      return $streams;
    }
}
