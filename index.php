<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
</head>
<style>
   body {
    background: url("img/banner-login.png") no-repeat center 10%;
   }

</style>

<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                   
                    
                    <div class="col-sm-12">
                        <div class="login-body">
                         
                            
                           <img src="img/fast-send-logo.png" align= "left" width="100%"><br><br>
                             <div class="login-col"><br>
                                
                                   <span style=color:"#ffffff";>&nbsp; &nbsp;</span> 
            
                             </div>

                            <form  action="login/autenticacion.php" method="post" role="form" id="form_login">
                                <div class="control">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Usuario" />
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                                </div>
                                <div class="login-button text-center">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                    <div class="progress hidden" id="login-progress">
                                       <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                                         Ingresando...
                                       </div>
                                    </div>
                                </div>
                            </form><br><br>
                            <div>
                               <?php
                                 if ($_GET["errorusuario"]=="si"){
                              ?>
                                 <div class="alert"><strong style="color:#B71C1C;"> Datos Incorrectos !</strong></div>
                            <?php
                                 }
                             ?>
                              </div>
                           
                        </div>
                        
                              
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
   <script type="text/javascript" src="lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="lib/js/ace/theme-github.js"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/index.js"></script>
         <?php
             session_start();
             if ($_SESSION["autenticado"] == "SI") {
             session_destroy();
             exit();
             }
         ?>

</body>

</html>
