<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function log_admin(Request $request)
    {
        $messages = [
            'login.required' =>'Поле login обязательно для заполнения.',
            'login.max' =>'Поле login должно быть не более 30 символов.',
            'login.min' =>'Поле login должно быть не менее 3 символов.',
            'password.required' =>'Поле password обязательно для заполнения.',
            'password.max' =>'Поле password должно быть не более 20 символов.',
            'password.min' =>'Поле password должно быть не менее 8 символов.',
            ];


        $request->validate([
            'login' => 'required|max:30 | min:3',
            'password' => 'required|max:20 | min:8'
        ], $messages);

        return 'login = '. $request->login .' '. 'password = '. $request->password;
    }

    function register($name, $pass1,$pass2, $email)
    {
    //Очистка данных
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass1));
    $pass=trim(htmlspecialchars($pass2));
    $email=trim(htmlspecialchars($email));

    //Проверка на заполненность
    if($name =='' || $pass =='' || $email =='') {
    echo "
        <h3 /><span style='color:red;'>
        Заполните все обязательные поля</ span>
        <h3 />";
        return false;
    }

    //Проверяем длинну имени и пароля
    if(strlen($name) < 3 || strlen($name)> 30 || strlen($pass) < 3 || strlen($pass)> 30) {
        echo "
        <h3 /><span style='color:red;'>
        Длина Значений Должна Составлять От 3 До 30</span>
        <h3 />";
        return false;
    }

    //Проверяем, совпадают ли пароль и подтверждение
    if($pass1 != $pass2) {
        die("Пароль и подтвкерждение пароля не совпадают");
    }

    if(!strpos($email,'@')) {
        die('Невалидный Email');
    }

    //login uniqueness check block
    global $users;//Забираем в функцию глобальную переменную

    $file=fopen($users,'a+');//Открываем (создаем) для чтения и записи файл

    while($line=fgets($file, 128)) {

        $readname=substr($line,0,strpos($line,':'));//Получаем из строки в файле имя пользователя

        //Проверка на существование пользователя
        if($readname == $name) {
            echo "
            <h3 /><span style='color:red;'>
                Such Login Name Is Already Used!</span>
            <h3 />";
            return false;
        }
    }

    //new user adding block
    $line=$name.':'.md5($pass).':'.$email.":user\r\n";
    fputs($file,$line);
    fclose($file);
    return true;
}

function login($login, $password) {
    $name=trim(htmlspecialchars($login));
    $pass=trim(htmlspecialchars($password));
    global $users;

    $file=fopen($users,'a+');

    if($name =='' || $pass =='') {
        echo "
            <h3 /><span style='color:red;'>
                Заполните все необходимые поля!</ span>
            <h3 />
            <a href='index.php?page=5' type='button' class='btn btn-light text-dark me-2'>Login</a>";
            return false;

        }

    while($line=fgets($file, 128)) {

        //Разделяем строку на части по разделителю ":" и записываем каждую часть в соответствующую переменную
        list($user_name, $pass_hesh, $email, $status) = explode(":", $line);


        //Проверка на существование пользователя
        if($user_name == $login and md5($password) == $pass_hesh) {
            echo $status;
            if($status == 'admin'){
                echo "Статус ". $status;
                session_start();
                $_SESSION['admin'] = 'true';
            }


            return true;
        }
    }
    return false;

}
}
