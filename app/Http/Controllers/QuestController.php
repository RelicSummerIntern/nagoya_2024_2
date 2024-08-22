<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;


class QuestController extends Controller
{
    public function index()
    {
        $quests = Quest::all();
        return view('quest_board', ['quests' => $quests]);
    }
}
