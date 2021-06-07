<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要

class BmiController extends Controller
{

    public function bmi_top() {
        
        return view('bmi_top');
    }

    public function bmi_result(Request $request) {
        $body_height = $request->body_height;
        $body_weight = $request->body_weight;
        $result = "";

        $bmi = ceil(($body_weight / $body_height) / $body_height);

        if ($bmi < 18.5) {

            $result = "痩せているかも...いっぱい食べよう。";

        } elseif ($bmi >= 18.5 && $bmi < 25) {

            $result = "一般的なBMIだね...この食事を続けよう！";

        } else {

            $result = "太り気味かも...運動を始めよう";

        }

        $data = [

            'bmi'=>$bmi,
            'result'=>$result

        ];

        return view('bmi_result' , $data);
    }
    
}
