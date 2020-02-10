<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;



class SchedulesController extends Controller
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

    public function getAll(){
      $database = $this->getDb();

      $ref = $database->getReference('games')
      ->orderByChild('orderTime');
      $values = $ref->getValue();
      foreach ($values as $value) {
        $all_values[] = $value;
      }
      return $all_values;
    }

    public function index(){


       //get the database
       $database = $this->getDb();

       $ref = $database->getReference('games')
       ->orderByChild('orderTime');
       $values = $ref->getValue();
       foreach ($values as $value) {
         $all_values[] = $value;
       }
      return view('schedules',compact('all_values'))->with(['schedulescontroller'=>$this]);

    }

     public function getbydate($date){

       $database = $this->getDb();

      $ref1 = $database->getReference('games')
      ->orderByChild('date')
      ->equalTo($date);
      $gamesbydate = $ref1->getValue();
      $leagues = array();
      foreach ($gamesbydate as $value) {
        $leagues[$value['league']][] = $value;
      }
      return $leagues;
    }

    public function getdate(){
      return $this->getTheNumberOfDiffirentesDates();
    }


    public function getTheNumberOfDiffirentesDates(){
      $database = $this->getDb();

      $games = $this->getAll();
      $dates = array();
      foreach ($games as $value) {
        $dates[$value['date']][] = $value;
      }

      return $dates;
    }


    // where games have same league and the same date of $index
    public function getTheleaguesofDay($indexi,$indexj){
      $dates = $this->getTheNumberOfDiffirentesDates();
      $keys = array_keys($dates);

      $leagues = $dates[$keys[$indexi]];

      foreach($leagues as $value){
        $games[$value['league']][] = $value;
      }
      $keysleagues = array_keys($games);
      $game = $games[$keysleagues[$indexj]];
      return $game;
    }
}
