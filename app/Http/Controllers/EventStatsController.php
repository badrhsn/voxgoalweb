<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;

class EventStatsController extends Controller
{

    public function index($id, $name)
    {
        $database = $this->getDb();
        $ref1 = $database->getReference('statistics')
            ->orderByChild('id')
            ->equalTo((int) $id);
        $event = $ref1->getValue();
        foreach ($event as $value) {
            $stats[] = $value;
        }
        return view('eventstats', compact('stats'))->with(['eventstatscontroller' => $this]);
    }

    public function getDb()
    {
        $factory = (new Factory())
            ->withServiceAccount(__DIR__ . '/FirebaseKey.json')
            ->create();
        //get the database
        $database = $factory->getDatabase();

        return $database;
    }

    public function getEventInfo($id)
    {
        $database = $this->getDb();
        $ref1 = $database->getReference('gamesStatistics')
            ->orderByChild('id')
            ->equalTo((int) $id);
        $event = $ref1->getValue();
        foreach ($event as $value) {
            $events[] = $value;
        }

        return $events;
    }

}
