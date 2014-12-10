<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 17/11/2014
 * Time: 19:04
 */
session_start();
if (isset($_POST['submit']))
{
    $username=htmlentities(trim($_POST['login']));
    $password=htmlentities(trim($_POST['password']));

    if ($username && $password ){
        //$password=md5($password);
        $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
        mysql_select_db('API_ENVIRONMENT');

        $reg=mysql_query("SELECT * FROM authentification WHERE login='$username' && password='$password'");
        $rows=mysql_num_rows($reg);

        if ($rows == 1) {
            $_SESSION['username']=$username;
            header("Location:index.php");

        }else{ echo "Account not exist or bad password";}
    }else{ echo "Veuillez saisir tous les champs";}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Authentification</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script>

    $("#auth").click(function(e){
        e.preventDefault();
        $.post('login.php',
            {
                login : $("#login").val(),
                password : $("#password").val()
            },
            function(data){
                $("#result-auth").html("<p>"+data+"</p>");
            },
            'text'
        );
    });
</script>

<body style="background-image: url('bck_img1'); background-repeat: no-repeat;background-position: center top; border: medium none;">
<img src="ciscoLogo.png" alt="Mountain View" style="width:260px;height:0%; float:right;">

    <div class="container">
        <div class="row">
            <div style="margin-top:200px;" >
                <div class="col-md-4 col-md-offset-4" style="padding-top: 2%; padding-bottom: 2%; padding-left: 2%; padding-right: 2%; background-color:transparent;">
                    <form role="form" method="post" name="auth">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                            </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
