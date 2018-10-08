<?php
session_start()?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" Content="IE-edge">
    <title>Studyleague IT Solutions - Web Intermediate</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ind.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container-fluid top_bar embed-responsive-1by1" >
    <div class="container">
        <div class="row">
            <div class="col-sm-8 ">
                <div class="col-sm-4">
                    <a href="http://www.facebook.com" target="_blank" class="social_icons"> <i class="fa fa-facebook" style="font-size: 20px; color:#fff;"></i></a>
                    <a href="http://www.youtube.com" class="social_icons">   <i class="fa fa-youtube" style="font-size: 20px; color:#fff;"></i></a>
                    <a href="http://www.twitter.com" class="social_icons">    <i class="fa fa-twitter" style="font-size: 20px; color:#fff;"></i></a>
                    <a href="http://mail.google.com" class="social_icons">    <i class="fa fa-google-plus-official" style="font-size: 20px; color:#fff;"></i></a>
                </div>

            </div>

            <div class="col-sm-4 text-right ">
                <i class="fa fa-envelope"></i> &nbsp;contactus@studyleagueit.com &nbsp;&nbsp;  &nbsp;&nbsp;
            </div>
        </div>
    </div>
</div>

<?php
include "connection.php";
?>
<?php
if(isset($_POST["login"]))
{
    $username=mysqli_real_escape_string($con,$_POST["username"]);
    $password=mysqli_real_escape_string($con,$_POST["password"]);

    if (isset($_POST['remember_me'])) {
        setcookie('uname', $username, time() + (86400 * 15));
        setcookie('upass', $password, time() + (86400 * 15));
    }
    else {
        if ($username != $_COOKIE['uname'] || $password != $_COOKIE['upass']) {
            setcookie('uname', $username, time() - (86400 * 15));
            setcookie('upass', $password, time() - (86400 * 15));
        }
    }
    $result_query=mysqli_query($con,"select * from user WHERE email='$username'");
    if(mysqli_num_rows($result_query)!=0)
    {
        $row=mysqli_fetch_assoc($result_query);
        $salt=$row["salt"];
        $hash=$row["hash"];
        $activate=$row["activation"];
        $password_check=hash('sha256',$password.$salt);
        for($i=0;$i<5463;$i=$i+1)
        {
            $password_check=hash('sha256',$password_check.$salt);
        }
        mysqli_query($con,"insert into password(email,hash,salt) VALUES('$username','$password_check','$salt')");
        if($password_check==$hash)
        {
            if($activate==1)
            {
                $_SESSION['user_name']=$username;
                header('location:index.php');
            }
            else
            {
                echo "<script>alert('Your Account is not activated')</script>";
                echo "<script>window.open('index.php','_self')</script>";

            }
        }
        else
        {
            echo "<script>alert('Your Password is not matching');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
    else
    {
        echo "<script>alert('Not a valid username');</script>";
        echo "<script>window.history.back();</script>";
    }
}
?>
<div class="container-fluid header_tab">
    <div class="row">
        <div class="nav">
            <div class="col-md-2">
                <a href="index.php"><img class="logo_size" src="images/logo/logo.JPG" alt="logo"></a>
            </div>
            <div class="col-md-10">
                <ul>
                    <li><a href="Property.php?pro_for=SELL">Buy</a></li>
                    <li><a href="Property.php?pro_for=RENT">Rent</a></li>

                    <li><a href="propertypost.php">Sell</a></li>
                    <?php
                    if(!@$_SESSION['user_name']) {
                        ?>

                        <li><button type="button" class="btn btn-info"
                                    data-toggle="modal" data-target="#myModal">Sign in
                            </button></li>
                        <?php
                    }


                    else{
                        ?>
                        <li><a href="logout.php">logout</a></li>
                        <li><a href="Profile.php">Profile</a> </li>

                        <?php
                    }
                    ?>
                    <li  style="float: right;"><a style="border: 1px solid #2e6da4;border-radius: 5px" href="propertypost.php">Post property</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header heading header_tab">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign in</h4>
            </div>
            <div class="modal-body" style="background: darkgray">
                <div class="table-responsive">
                    <form method="post" action="">
                        <table class="table table-responsive">

                            <tbody>
                            <center>
                                <tr>
                                    <td class="set"><label>Username :</label></td>
                                    <td><input class="form-control" type="email" placeholder="username" name="username" required></td>
                                </tr>
                                <tr>
                                    <td class="set"><label>Password :</label></td>
                                    <td><input class="form-control" type="password" placeholder="password" name="password" required></td>
                                </tr>

                                <tr>
                                    <td colspan="2" style="border: none">
                                        <center>
                                            <input type="submit" class="btn btn-success" value="Login" name="login">
                                            <a href="forgot.php">Forgot password</a>

                                            <br>
                                            <br>
                                            <button class="btn-primary btn"><a class="a" href="signup.php">Sign up</a></button>
                                        </center>
                                    </td>
                                </tr>

                            </center>
                            </tbody>

                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
