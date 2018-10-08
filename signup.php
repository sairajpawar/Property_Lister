<html>
<body style="background-color: ghostwhite">
<?php
include "header.php";
if(!@($_SESSION['user_name'])){
?>
<br>
<br>
<br>
<?php
if(isset($_GET["activation"]))
{
   $str=mysqli_real_escape_string($con,$_GET["activation"]);
   $a=explode("=",$str);
   $result_for_activation=mysqli_query($con,"select * from user WHERE email='$a[0]'AND salt='$a[1]'");
   if(mysqli_num_rows($result_for_activation)==1)
   {
       $row=mysqli_fetch_assoc($result_for_activation);
       if( $atc=(int)$row['activation']==0)
       {
        $q1=mysqli_query($con,"update user set activation=1 WHERE email='$a[0]'");
        if(q1)
        {
            echo "<script>alert('Your account is Successfully activated');</script>";
            echo "<script>window.open('index.php','_self');</script>";
        }
        else
            {
                echo "<script>alert('Something Went wrong in activation try again');</script>";
                echo "<script>window.open('index.php','_self');</script>";
            }

       }
       else
           {
               echo "<script>alert('Your account is already activated');</script>";
               echo "<script>window.open('index.php','_self');</script>";
           }
   }
   else
   {
       echo "<script>alert('activation link is not valid');</script>";
       echo "<script>window.open('index.php','_self');</script>";

       }
}
?>
    <div class="container" >
        <div class="row">
            <div class="col-md-offset-4">
                <div class="col-md-6 table-bordered curve" style="background-color: white">
                    <h3 class="heading">Sign Up</h3>
                    <div class="table-responsive">
                        <form  method="post" action="">
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td><label>Name:</label></td>
                                    <td><div class="form-group"> <input class="inp" type="text" placeholder="Name" name="name" required></div> </td>
                                </tr>

                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><div class="form-group"><input class="inp" type="email" placeholder="Email" name="email" required> </div></td>

                                </tr>

                                <tr>
                                    <td><label>Password:</label></td>
                                    <td><div class="form-group"><input class="inp" type="password" placeholder="Password" name="password" required> </div></td>

                                </tr>

                                <tr>
                                    <td><select class="inp" name=""><option value="0">+91</option></select></td>
                                    <td><div class="form-group"><input class="inp" type="text" placeholder="Mobile" name="mobile" maxlength="10" minlength="10" required></div> </td>

                                </tr>
                                <tr >
                                    <td colspan="2" >
                                        <center>
                                    <input type="checkbox" required>I accept terms &amp; conditions
                                        </center>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="2" class="noborder">
                                        <center>
                                        <input class="btn btn-success" type="submit" value="Sign up" name="sign_up">
                                        </center>
                                    </td>

                                </tr>

                                </tbody>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
if(isset($_POST["sign_up"]))
{
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $password=mysqli_real_escape_string($con,$_POST["password"]);
    $mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
$check=mysqli_query($con,"select * from user WHERE email='$email'");
if(mysqli_num_rows($check)==0)
{
$salt=dechex(mt_rand(0,225222772)).dechex(mt_rand(0,225222772));
$pass=hash('sha256',$password.$salt);
for($i=0;$i<5463;$i=$i+1)
{
    $pass=hash('sha256',$pass.$salt);
}
$insert_query="insert into user(name,email,hash,salt,contact) VALUES('$name','$email','$pass','$salt','$mobile')";
$insertion_result=mysqli_query($con,$insert_query);
if($insertion_result)
{


    $to=$email;
    $subject='Signup Verification';
    $message='Thanks for signing up your account has been created you can login after you have activated your account by clicking below
            
            Pleace click this link to activate your account:http://www.xyz.com/signup.php?activation='.$email.'='.$salt.'';
    $header='Form: conatctus@gmail.com'."\r\n";
    $mail=mail($to,$subject,$message,$header);
    if ($mail)
    {
      echo "<script>alert('Your account is created and activation link is send to your mail')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
    else
        {
            echo "<script>alert('Error in sending mail')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
}
else
    {
        echo "<script>alert('something went wrong');</script>";
        echo "<script>window.history.back();</script>";
    }
}
else
    {
        echo "<script>alert('Email id is already exist');</script>";
        echo "<script>window.history.back();</script>";
    }
}
?>
<?php
include "footer3.php";
?>
</html>
<?php
}else
    {
        echo "<script>window.open('index.php','_self')</script>";
    }
?>