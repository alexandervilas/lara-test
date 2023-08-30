<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Topic;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function show()
    {
        $var = "Некая переменная";
        return view('home', [
            'var' => $var,
            'var2' => "Еще одна переменная",
            'var3' => 88
        ]);
    }

    public function page()
    {
        return view('page.main');
    }

    public function master()
    {
        return view('page_one.master');
    }

    public function array()
    {
        $var = ["Лена", "Ока", "Волга", "Дон"];
        // return view('array', ['var' => $var]);
        $name = 'Jane';
        $age = 25;

        // return view('array', compact('var', 'name', 'age'));

        // return view('array')->with([
        //     'name' => 'Alice',
        //     'age' => 25,
        //     'var' => $var
        // ]);

        //return view('array')->withName(name)->withAge(28)->withVar($var);   

    }

    public function vars()
    {
        $code = "<script>alert( 'Всем привет!' );</script>";

        $arr = array(
            array(
                "name" => "Pankaj Singh",
                "age" => "20"
            ),
            array(
                "name" => "Arun Yadav",
                "age" => "21"
            ),
            array(
                "name" => "Apeksha Jaiswal",
                "age" => "20"
            )
        );
        // return \Illuminate\Support\Js::from($arr);

        return view('vars', compact('code', 'arr'));
    }

    public function get_topics()
    {
        $user = User::find(1);
        $topics = $user->topics;

        $topic = Topic::find(1);
        $user = $topic->user;
        return $user;
    }

    public function categores()
    {
        $topics_array = [];
        foreach (Topic::all() as $topic) {
            $topics_array[] = $topic->topicname;
        }

        return view('shop_page', compact('topics_array'));
    }
}

    public function put_form()
    $messages = [
        'login.required' =>'Поле login обязательно для заполнения.',
        'login.max' =>'Поле email обязательно для заполнения.',
        'login min'=>поле login должно быть 
        // ...
    {       
        return "Я метод, обрабатывающий форму";
    }
}
use Illuminate\Http\Request;
'login'=>'required|max:30| min:3'
'password'=>'required|max:20| min:8'
]);
//var_dump($request->$_POST['login']);
//return('login)='. @request