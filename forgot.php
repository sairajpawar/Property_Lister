<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" Content="IE-edge">
    <meta name="viewport" content="width-device-width">
    <title>Studyleague IT Solutions - Web Intermediate</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ind.css" rel="stylesheet">
</head>
<body>
<?php
include "header.php";
if(!@$_SESSION['user_name']){
if (isset($_GET["forgot_password_request"])) {
    $values = explode("=", mysqli_real_escape_string($con, $_GET["forgot_password_request"]), PHP_INT_MAX);
    $email_check = $values[0];
    $_SESSION["email"] = $email_check;
    $hash_check = $values[1];
    $salt_check = $values[2];
    $result = mysqli_query($con, "select * from user WHERE email='$email_check' AND hash='$hash_check' AND salt='$salt_check'");
    if (mysqli_num_rows($result) == 1) {
        ?>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-offset-4">

                        <div class="col-md-6">
                            <center>
                                <form class="form-inline" method="post" action="">

                                    <div class="form-group">
                                        <label>new Password</label>
                                        <input class="form-control" type="password" name="new_password"
                                               placeholder="Enter your Password" required>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label>Confirm password</label>
                                        <input class="form-control" type="password" name="confirm_password"
                                               placeholder="Enter your Password" required>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input class="btn-primary" type="submit" value="reset password"
                                               name="reset_password">
                                    </div>

                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<script>alert('Opened link is not valid')</script>";
        echo "<script>window.open('index.php',_self)</script>";
    }
} else {
    ?>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-lg-offset-4">

                    <div class="col-md-6 table-bordered curve">
                        <center>
                            <h3 class="heading">Forgot Password</h3>
                            <div class="table-responsive">
                                <form method="post" action="">
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td><label>Username:</label></td>
                                            <td>
                                                <div class="form-group"><input class="inp" type="text"
                                                                               placeholder="email" name="email"
                                                                               required></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="2">
                                            <td colspan="2">

                                                <img src="captcha.php">

                                                <div class="form-group " style="margin-top: 20px"><input class="inp"
                                                                                                         type="text"
                                                                                                         placeholder="Enter Captcha"
                                                                                                         name="cap"
                                                                                                         required></div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="noborder">

                                                <input class="btn btn-success" type="submit" value="Forgot password"
                                                       name="forgot_password">

                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>
                                </form>
                            </div>
                        </center>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php
if (isset($_POST["forgot_password"])) {
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $captch = mysqli_real_escape_string($con, $_POST["cap"]);
    $check_captcha = $_SESSION["cap_code"];
    if ($captch == $check_captcha) {
        $check_for_record = mysqli_query($con, "select * from user where email='$email'");
        if (mysqli_num_rows($check_for_record) == 1) {
            $record = mysqli_fetch_assoc($check_for_record);
            $username = $record["email"];
            $hash = $record["hash"];
            $salt = $record["salt"];

            $to = $email;
            $subject = 'Reset Password';
            $message = 'Your request for password has accepted change your password by clicking the link below
            
            Pleace click this link to change your password:http://www.xyz.com/forgot.php?forgot_password_request=' . $email . '=' . $hash . '=' . $salt . '';
            $header = 'Form: conatctus@gmail.com' . "\r\n";
            $mail = mail($to, $subject, $message, $header);
            if ($mail) {
                echo "<script>alert('Request accepted reset password link has sent to your mail')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            } else {
                echo "<script>alert('Error sending mail')</script>";
                echo "<script>window.history.back()</script>";
                exit();
            }
        } else {
            echo "<script>alert('Not a valid Username')</script>";
            echo "<script>window.history.back()</script>";
            exit();
        }
    } else {
        echo "<script>alert('Your captcha is not matching')</script>";
        echo "<script>window.history.back()</script>";
        exit();
    }
} elseif (isset($_POST["reset_password"])) {
    $new_password = mysqli_real_escape_string($con, $_POST["new_password"]);
    $confirm_password = mysqli_real_escape_string($con, $_POST["confirm_password"]);

    if ($new_password == $confirm_password) {
        $abc = $_SESSION['email'];
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
        $hash_user_password = hash('sha256', $new_password . $salt);
        for ($round = 0; $round < 5463; $round++) {
            $hash_user_password = hash('sha256', $hash_user_password . $salt);
        }
        $update_password_query = mysqli_query($con, "update user set hash='$hash_user_password',salt='$salt' WHERE email='$abc'");
        session_destroy();
    }


    if ($update_password_query) {
        echo "<script>alert('Your password has successfully changed')</script>";
        echo "<script>window.open('Login.php','_self')</script>";
        exit();
    } else {
        echo "<script>alert('Both the passwords are not matching')</script>";
        echo "<script>window.history.back()</script>";
        exit();
    }

}
include "footer3.php";
?>

</body>
</html>
<?php
}
else
    {
        echo "<script>alert('You are already logged in');window.open('index.php','_self');</script>";
    }
?>