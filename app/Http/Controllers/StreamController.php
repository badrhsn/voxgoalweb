<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;


class StreamController extends Controller
{
    //
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
        $server = $streams[$serverid];


//// events
$ref1 = $database->getReference('games')
      ->orderByChild('id')
      ->equalTo($id);
      $event = $ref1->getValue();
      foreach ($event as $value) {
        $events[] = $value;
      }

        return view('eventpage',compact('server'))->with(compact('events'))->with(['servercontroller'=>$this]);
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
