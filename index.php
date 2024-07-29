<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="https://kit.fontawesome.com/e9cff1b59f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <script src="js/modernizr/modernizr.min.js"></script>
        <link rel="stylesheet" href="css/ayush.css" media="screen" >
       
    </head>
    <body class="">
        

            <div class="">

                        <section class="section">
                            
                        
                            <div class="row mt-1"><div class="panel-heading">
                                <div class="panel-title head text-center">
                                    <h4 class="te">welcome to Student Management software</h4>
                                </div>
                            </div>
                                <div class="col-md-10 col-md-offset-1 ">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11  card1 ">
                                            <div class=" card__content">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4 class="title">Admin Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                   

                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group">
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control input" id="inputEmail3" placeholder="UserName">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control input" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>

                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<button type="submit" name="login" class="uiverse"><div class="wrapper">
                                                                            <span>Login!</span>
                                                                            <div class="circle circle-12"></div>
                                                                            <div class="circle circle-11"></div>
                                                                            <div class="circle circle-10"></div>
                                                                            <div class="circle circle-9"></div>
                                                                            <div class="circle circle-8"></div>
                                                                            <div class="circle circle-7"></div>
                                                                            <div class="circle circle-6"></div>
                                                                            <div class="circle circle-5"></div>
                                                                            <div class="circle circle-4"></div>
                                                                            <div class="circle circle-3"></div>
                                                                            <div class="circle circle-2"></div>
                                                                            <div class="circle circle-1"></div>
                                                                        </div></button>
                                                    		</div>
                                                    	</div>
                                                    </form>




                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

        </div><div class="card">
                                <p class= "te">Student Login</p>
                                <button class="cta" href="find-result.php"> <a href="find-result.php"> HOVER ME</a></button>
</div>
                                

        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
