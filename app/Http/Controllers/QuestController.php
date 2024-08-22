<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;


class QuestController extends Controller
{
    public function index()
    {
        $quest = Quest::all();
        return view('quest_board', ['quest => $quest']);
    }
}
