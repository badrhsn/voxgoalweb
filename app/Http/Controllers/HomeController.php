<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class HomeController extends Controller
{
    
    public function index(){
        $events = $this->getStats();
        return view('home')->with(['homecontroller'=>$this]);
    }

    public function getDb(){
        $factory = (new Factory())
         ->withServiceAccount(__DIR__.'/FirebaseKey.json')
         ->create();
         //get the database
         $database = $factory->getDatabase();
    
         return $database;
      }
    

    public function getStats(){
    $database = $this->getDb();
      $ref1 = $database->getReference('gamesStatistics')
      ->orderByChild('id')
      ->limitToLast(10);
      $event = $ref1->getValue();

      foreach ($event as $value) {
        $events[] = $value;
      }

      return $events;
    }





    
}
