<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryController extends Controller
{

    public function index()
    {
        return view('lottery.index');
    }

    private function generateNumbers($lottery_numbers, $maximum)
    {

        // $types = [
        //     'megasena' => ['limit' => 6, 'max' => 60],
        //     'lotofacil' => ['limit' => 15, 'max' => 25]
        // ];

        $x = 0;
        $numbers = [];
        while (count($numbers) < $lottery_numbers)
        {
            $randomn = rand(1, $maximum);
            while(in_array($randomn, $numbers))
            {
                $randomn = rand(1, $maximum);
            }
            $randomn = str_pad($randomn, 2, "0", STR_PAD_LEFT);

            $numbers[$x] = $randomn;
            $x++;
            // echo "Number $x is: $randomn.<br />";
        }
        sort($numbers);

        return $numbers;

        // return response()->json($numbers);

    }


    function generateGames(Request $request)
    {

        // tickets - numero de jogos
        // numbers - quantidade de numeros por jogo
        // maximum - numero máximo permitido

        // dd($request->all());

        $i = 0;
        $games = [];
        while (count($games) < $request->tickets)
        {
            $genaratedNumbers = $this->generateNumbers($request->numbers, $request->maximum);
            $games[$i] = $genaratedNumbers;
            $games = $this->arrayUnique($games);
            $i++;
        }

        // var_dump($games);

        // return $games;

        return response()->json($games);

    }

}