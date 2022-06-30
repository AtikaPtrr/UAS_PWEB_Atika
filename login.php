<!DOCTYPE html>
<html>

<head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body class="cover" style="background-image:url(images/smk.jpg);
    background-size: cover;
    height: 100vh;">

<div style="color:#3c8dbc" class="login-logo text-center">
        <img style="margin-top:10px; margin-bottom:70px " src="images/logosmk.png" alt="Logo" height="200"> <b></b>
      </div>

    <?php
    if (!isset($_session['admin'])) {
        $_session['admin'] = "";
    }
    echo $_session['admin']; ?>
    <div class="container " >
        <div class="login-container" style="margin-top: -50px; border: 4px ;border-radius: 10px;background-color:#1b263b">
            <div id="output"></div>
                <p class="text-login" style="margin-top: 20px; color:#778da9; font-size: 20px;
                margin-bottom: 10px;font-weight: bold;">Login Sebagai Admin</p>
            
            <div class="form-box">
                <form action="proseslogin.php" method="post">
                    <input name="username" type="text" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button class="btn btn-info login" type="submit">Login</button>
                </form>
                <br>
                <center>
                    <p ><a style="color:#778da9">SMK N 1 JAKARTA </a></p>
                </center>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>