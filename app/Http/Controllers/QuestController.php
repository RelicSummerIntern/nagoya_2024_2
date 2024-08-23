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
    public function coupon($id)
    {
        $quest = Quest::findOrFail($id);
        return view('quest_user1', ['quest' => $quest]);
    }

    public function markAsCompleted(Request $request, $id)
    {
        // クエストを取得
        $quest = Quest::findOrFail($id);

        // クエストを完了としてマーク
        $quest->update(['is_completed' => true]);

        // 成功メッセージをセッションにセットしてリダイレクト
        return redirect()->route('Quest.index')->with('success', 'クエストクリア');
    }
}
