<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要
use App\Models\Impression;

class JinHomepageController extends Controller
{
    //jin_homepageの画面
    public function jin_homepage(Request $request) {
        
        return view('jin_homepage');

    }


    //jin_homepage_checkの画面
    public function jin_homepage_check(Request $request) {
        $name = $request->name;
        $password = $request->password;
        $message = $request->message;

        $data = [
            'name'=>$name,
            'password'=>$password,
            'message'=>$message

        ];
        
        return view('jin_homepage_check',$data);

    }


    //jin_homepage_completeの画面
    public function jin_homepage_complete(Request $request) {
        
        return view('jin_homepage_complete');

    }
}
