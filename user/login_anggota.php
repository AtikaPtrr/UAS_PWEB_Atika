<!DOCTYPE html>
<html>
    <head>
        

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../login.css">
    </head>

    <body style="background: #55828b">
<div style="color:#3c8dbc" class="login-logo text-center">
        <img style="margin-top:-55px " src="../images/logo.png" alt="Logo" height="400"> <b></b>
      </div>

       <div class="container">
        <div class="login-container" style="margin-top: -50px">
                <div id="output"></div>
                <p class="text-login" style="margin-top: 20px; color:#55828b; font-size: 18px;
                margin-bottom: 10px;font-weight: bold;">Login Sebagai Anggota</p>
                <div class="form-box">
                    <form action="proseslogin_anggota.php" method="post">
                        <input name="username" type="text" placeholder="username">
                        <input type="password" name="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                   <a href="../register.php" class="btn btn-info btn-block">Register</a>
                   
                    </form>
                </div>
         </div>  
    </div>
       
      
    
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>