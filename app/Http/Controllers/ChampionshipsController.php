<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ChampionshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_1' => 'string|required',
            'name_2' => 'string|required',
            'name_3' => 'string|required',
            'name_4' => 'string|required',
            'name_5' => 'string|required',
            'name_6' => 'string|required',
            'name_7' => 'string|required',
            'name_8' => 'string|required',
        ]);

        $championship = new Championship([
            'name' => 'Championship'
        ]);
        $championship->save();

        // Create new teams
        $teams[] = Team::create(['name' => $request->name_1]);
        $teams[] = Team::create(['name' => $request->name_2]);
        $teams[] = Team::create(['name' => $request->name_3]);
        $teams[] = Team::create(['name' => $request->name_4]);
        $teams[] = Team::create(['name' => $request->name_5]);
        $teams[] = Team::create(['name' => $request->name_6]);
        $teams[] = Team::create(['name' => $request->name_7]);
        $teams[] = Team::create(['name' => $request->name_8]);

        // ============================================================
        // Generate new games in championships randomly
        srand(microtime(true));
        shuffle($teams);

        foreach ($teams as $key => $value) {
            if ($key % 2 == 0) {
                $game = new Game([
                    'home_team_id'  => $value->id,
                    'away_team_id'  => $teams[$key + 1]->id,
                    'championship_id' => $championship->id,
                    'round'         => 'QF',
                ]);
                $game->save();
            }
        }

        // ============================================================
        // Calculate quarterfinals results
        foreach ($championship->games as $game) {
            if ($game->round == 'QF') {
                $homeScore = rand(0, 8);
                $awayScore = rand(0, 8);

                if ($homeScore > $awayScore) { // Home team wins
                    $game->winner_score = $homeScore;
                    $game->loser_score = $awayScore;
                    $game->winner_id = $game->home_team_id;
                    $game->loser_id = $game->away_team_id;
                    // $game->QF_winners = $game->home_team_id;
                } elseif ($awayScore > $homeScore) { // Away team wins
                    $game->winner_score = $awayScore;
                    $game->loser_score = $homeScore;
                    $game->winner_id = $game->away_team_id;
                    $game->loser_id = $game->home_team_id;
                    // $game->QF_winners = $game->away_team_id;
                } else { // Draw
                    $game->winner_score = $homeScore;
                    $game->loser_score = $awayScore;
                    if ($game->home_team_id < $game->away_team_id) { // Home team wins
                        $game->winner_id = $game->home_team_id;
                        $game->loser_id = $game->away_team_id;
                        // $game->QF_winners = $game->home_team_id;
                    } else { // Away team wins
                        $game->winner_id = $game->away_team_id;
                        $game->loser_id = $game->home_team_id;
                        // $game->QF_winners = $game->away_team_id;
                    }
                }

                $game->save();
            }
        }

        // ============================================================
        // Generate the new SF (semifinals) round Games


        // ============================================================
        // Generate the new F (finals) round Games


        return redirect()->route('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
