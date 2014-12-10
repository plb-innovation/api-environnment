<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 17/11/2014
 * Time: 19:04
 */

if (isset($_POST['submit']))
{
    $username=htmlentities(trim($_POST['login']));
    $email=htmlentities(trim($_POST['email']));
    $password=htmlentities(trim($_POST['password']));
    $repeat=htmlentities(trim($_POST['confirm-password']));

    if ($username && $email && $password && $repeat ){
        if($password == $repeat){
            //$password=md5($password);
            $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
            mysql_select_db('API_ENVIRONMENT');

            $reg=mysql_query("SELECT * FROM authentification WHERE login='$username'");
            $rows=mysql_num_rows($reg);

            if ($rows == 0) {
                $query=mysql_query("INSERT INTO authentification VALUES('','$username','$email','$password')");
                echo "Inscription confirmed";
                echo  "<a href='login.php'> log in</a>";
                mysql_close($connect);
            }else{echo"Account already exist";}
            mysql_close($connect);
        }else{echo "Les mots de passe sont différents";}

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

    <title>Registration</title>

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

<body style="background-image: url('bck_img1'); background-repeat: no-repeat;background-position: center top; border: medium none;">
<img style="width: 237px; float: right; height: 158px;" alt="Mountain View" src="ciscoLogo.png">
<script>

    $("#from-register").click(function(e){
        e.preventDefault();
        $.post('register.php',
            {
                login : $("#login").val(),
                email : $("#email").val(),
                password : $("#password").val(),
                repeat : $("#confirm-password").val()
            },
            function(data){
                $("#result-register").html("<p>"+data+"</p>");
            },
            'text'
        );
    });
</script>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 160px;">
                        <form role="form" method="post" name="from-register">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="login" name="login" autofocus>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirm-password" type="password" value="">
                                </div>
                                <input name="submit" type="submit"  class="btn btn-primary btn-lg btn-block" value="Register">
                                <p id="result-register"></p>
                            </fieldset>
                        </form>
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
