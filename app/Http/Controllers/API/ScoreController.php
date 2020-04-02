<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScoreCollection;
use App\Models\Game;
use App\Models\Score;
use Illuminate\Http\Request;
use Auth;

class ScoreController extends Controller
{
    public function index(Game $game)
    {
        $query = Score::where('game_id', $game->id)->get();
        return new ScoreCollection($query);
    }

    public function store(Request $request)
    {
        $fields = $request->only(['alias', 'time', 'game_id']);

        if ($user = Auth::user()) {
            $fields['user_id'] = $user->id;
            $fields['alias'] = $request->get('alias') ?? $user->name;
        }

        return Score::create($fields);
    }
}
