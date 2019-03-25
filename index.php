<?php
    //$login = $_POST['login'];
   // $pass = $_POST['pass'];
    //if($pass == file_get_contents("users/".$login."/password.txt")) {
        //$URL="http://swiftmessage.esy.es/messages/";
        //header("Location: $URL");
    //}
    //else {
        //echo("Вы ввели неправлильный логин или пароль");
    //}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <style>
            body {
            display: inline-flex;
        	align-items: center;
	        justify-content: space-around;
            }
            h1 {
             position: relative;
             left: 0px;
             top: 20px;
             width: 500px;
             text-align: center;
            }
            #register {
                background-color: #FF4500;
                position: relative;
                left: 0px;
                top: 30px;
                width: 500px;
                height: 600px;
                color: #FFF;
                font-family: "Roboto",Helvetica,Arial,"Lucida Grande",sans-serif;
            }
            #image_main {
                position: relative;
                top: -600px;
                left: 50px;
            }
            #login {
                position: relative;
                left: 50px;
                top: 30px;
                width: 200px;
                height: 30px;
                border-radius: 4px;
                outline: none;
                padding: .5em;
                border: none;
                margin: 0.5em 0;
            }
            #password {
                position: relative;
                top: 35px;
                left: 50px;
                width: 200px;
                height: 30px;
                border-radius: 4px;
                outline: none;
                padding: .5em;
                border: none;
                margin: 0.5em 0;
            }
            #register_account {
                position: relative;
                top: 220px;
                left: 110px;
                color: #FFF;
            }
            .submit {
            display: inline-block;
            color: white;
            font-weight: 700;
            text-decoration: none;
            user-select: none;
            padding: 0px;
            outline: none;
            border: 2px solid;
            border-radius: 1px;
            transition: 0.2s;
            position: relative;
            top: 80px;
            left: 50px;
            width: 100px;
            height: 30px;
            border-radius: 10px;
            } 
            .submit:hover { background: rgba(255,255,255,.2); }
            .submit:active { background: white; }
            .loginform_paragraph {
                position: relative;
                left: 50px;
                top: 30px;
            }
        </style>
        <title>swift</title>
    </head>
    <body>
        <div id = register>
            <h1>
            Swift - мессенджер для разработчиков
        </h1>
            <form id = login method = post action = "enter.php"> 
                <input type = login name = "login" id = login placeholder="Логин">
                <input type = password name = "pass" id = password placeholder="Пароль">
                <input type = submit class = submit value = "Вход" >
            </form>
            <a href = "register.html" id = register_account >Нет аккаунта? Создайте его сейчас!</a>
        </div>
        
        <img src = "https://memegene.net/sites/default/files/wallpaper/phoenix-tattoos-clipart/195389/phoenix-tattoos-clipart-transparent-background-195389-8084652.png" width = "600" id = image_main />
    </body>
</html> 
</DOCTYPE>