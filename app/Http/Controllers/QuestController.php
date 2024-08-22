<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;


class QuestController extends Controller
{
    public function index()
    {
        $quests = Quest::inRandomOrder()->limit(10)->get();

        $clearCounts = $quests->mapWithKeys(function($quest) {
            return [$quest->id => $quest->clearCount()];
        });
        return view('quest_board', ['quests' => $quests, 'clearCounts' => $clearCounts]);
    }
    
}
