<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要
use App\Models\Impression;

class PsychologyController extends Controller
{
    //心理テストのトップ画面
    public function psychology_top(Request $request) {
        
        return view('psychology_top');
    }

    //記入したみんなの感想を見る事が出来るページ
    public function psychology_impressions(Request $request) {

        $impressions = Impression::all();
        

        $data = [

            'impressions'=>$impressions
            
        ];

        return view('psychology_impressions' , $data);

    }

    //心理テストの問題画面
    public function psychology_quizu($id, Request $request) {
        $answer_num = $request->radio_box;
        $total_answer = $request->total_answer;
        if (isset($answer_num)) {

            $total_answer = $total_answer + $request->radio_box;

        } else {

            $total_answer = 0;

        }
         $data = [

            'total_answer'=>$total_answer
         ];
         
        switch($id){
            case 1:
                return view('psychology_quizu1' , $data);
                break;
            case 2:
                return view('psychology_quizu2' , $data);
                break;
            case 3:
                return view('psychology_quizu3' , $data);
                break;
        }
    }

    //答え&感想画面
    public function psychology_answer(Request $request) {
        $answer_num = $request->radio_box;
        $total_answer = $request->total_answer;

        $total_answer = $total_answer + $request->radio_box;
        $question_answer = "";
        switch($total_answer) {
            case 7:
                $question_answer = "チーター";
                break;
            case 12:
                $question_answer = "狼";
                break;
            case 15:
              $animal_rand = mt_rand(1,3);

                if($animal_rand == 1) {

                    $question_answer = "ダチョウ";

                } elseif($animal_rand == 2) { 

                    $question_answer = "タヌキ";

                } else {

                    $question_answer = "キリン";

                }
                break;
            case 16:
                $question_answer = "パンダ";
                break;
            case 17:
                $question_answer = "ガゼル";
                break;
            case 20:
                $question_answer = "ナマケモノ";
                break;
            default:
                $question_answer = "ツチノコ";
        }

        $data = [

            'question_answer'=>$question_answer


        ];
        
        return view('psychology_answer' , $data);
        
    }

    //心理テストのメッセージ送信完了画面
    public function psychology_save( Request $request) {

        //save処理
        $impressionModel = new Impression;
        $saveData = $request->all();
        $impressionModel->fill($saveData)->save();

        return view('psychology_complete');
    }   

    public function psychology_complete( Request $request) {

        return view('psychology_complete');
    }   


}
