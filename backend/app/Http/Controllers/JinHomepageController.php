<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;//他のページからこのコントローラを通じて値を処理したりする際のRequestに必要
use App\Models\Bss_table;

class JinHomepageController extends Controller
{
    //jin_homepageの画面
    public function jin_homepage(Request $request) {

        $bss_table = Bss_table::orderBy('id', 'desc')->get();
        $error_message = "";
        
        return view('jin_homepage', ['bss_table' => $bss_table, 'error_message'=>$error_message]);

    }


    //jin_homepage_checkの画面
    public function jin_homepage_check(Request $request) {
        $name = $request->name;
        $password = $request->password;
        $message = $request->message;
        $error_message = "";

        if (isset($name)) {

        } else {
            $bss_table = Bss_table::orderBy('id', 'desc')->get();

            $error_message = "名前が記入されていません";
            return view('jin_homepage', ['bss_table' => $bss_table,'error_message'=>$error_message]);
        }

        if (isset($message)) {

        } else {
            $bss_table = Bss_table::orderBy('id', 'desc')->get();

            $error_message = "内容が記入されていません";
            return view('jin_homepage', ['bss_table' => $bss_table,'error_message'=>$error_message]);
        }

        if (isset($password)) {

        } else {
            $password = 0;
            
        }


        $data = [
            'name'=>$name,
            'password'=>$password,
            'message'=>$message

        ];
        
        return view('jin_homepage_check',$data);

    }


    //jin_homepage_completeの画面
    public function jin_homepage_complete(Request $request) {

        $bssTableModel = new Bss_table;
        $saveData = $request->all();
        $bssTableModel->fill($saveData)->save();

        return view('jin_homepage_complete');

    }
}
