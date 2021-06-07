<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要

class DiceController extends Controller
{
    //サイコロのゲームのトップ画面
    public function dice_game_top(Request $request) {
        $money = $request->money;//初期のおかね

        if (isset ($money)) {//もしお金の値が引き継がれている場合

        } else {//もしお金の値が引き継がれていない場合
            $money = 1000;
            
        }
        $data = [
            'money'=>$money,
        ];
        if ($money < 500) {
            
            return view('dice_game_over',$data);
            
        } else {
            
        }
        return view('dice_game_top',$data);
    }

    public function dice_game_over(Request $request) {
   
        return view('dice_game_over');

    }

    //サイコロゲームでサイコロのランダムの値の合計値が１０上下１０以下か判断し、丁・半を処理する
    public function dice_game_select(Request $request) {
        $money = $request->money;//おかね
        $dice1 = mt_rand(1,6);
        $dice2 = mt_rand(1,6);
        $dice3 = mt_rand(1,6);
        $judge = $dice1 + $dice2 + $dice3;
        $dice_message ="";
        
        if ($judge <= 10) {//もしダイスの3つの合計が１０以下なら
            $dice_message = "半";
        } elseif ($judge >= 11) {//もしダイスの3つの合計が10以上なら
            $dice_message = "丁";
        }

        $data = [
            'dice_message'=>$dice_message,
            'money'=>$money
        ];
        return view('dice_game_select',$data);
    }
    //サイコロゲームで丁か半かをプレイヤーが判断しそれが、サイコロの丁・半と比較する
    public function dice_game_answer(Request $request) {
        $money = $request->money;//お金
        $dice_message = $request->dice_message;//サイコロの値（丁、半）
        $player_answer = $request->select_box;//プレイヤーが選択した値
        $player_message = "";//プレイヤーが選択した(丁、半)
        $result_message = "";//結果を書き込む変数
        switch($player_answer){ 
            case 1: //プレイヤーが半を選択したら
                $player_message = "丁";
                break;
            case 2: //プレイヤーが丁を選択したら
                $player_message = "半";
                break;
        }
        if ($player_message == $dice_message) {//もしダイスの値とプレイヤーが判断した値が一緒だった場合の処理
            $money = $money + 500;//勝った場合は掛け金の２倍
            $result_message = "あなたの勝利です";
        } else {//もしダイスの3つの合計が10以上なら
            $money = $money - 500;
            $result_message = "あなたの負けです";
        }
        $data = [
            'dice_message'=>$dice_message,
            'result_message'=>$result_message,
            'money'=>$money
        ];
        return view('dice_game_answer',$data);
    }
}
