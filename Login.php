<!doctype html>
<html>
<body style="background: ghostwhite">
<?php
include "header.php";
if(!@$_SESSION['user_name']) {
    ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4">
                <div class="col-md-6 table-bordered curve" style="background-color: white">
                    <h3 class="heading">Sign In</h3>
                    <div class="table-responsive">
                        <form method="post" action="">
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td><label>Username:</label></td>
                                    <td>
                                        <div class="form-group"><input class="inp" type="email" placeholder="Username"
                                                                       name="username" value="<?php if (isset($_COOKIE['uname'])) { echo $_COOKIE['uname'];} ?>" required></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Password:</label></td>
                                    <td>
                                        <div class="form-group"><input class="inp" type="password"
                                                                       placeholder="Password" name="password" value="<?php
                                            if (isset($_COOKIE['upass'])) {
                                                echo $_COOKIE['upass'];
                                            } ?>" required>
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <center><input type="checkbox" name="remember_me">Remember me
                                            <a href="forgot.php">forgot password</a></center>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="2" class="noborder">
                                        <center>
                                            <input class="btn btn-success" type="submit" value="Login" name="login">

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
    <?php
    include "footer3.php";
}
else
    {
        echo "<script>window.open('index.php','_self');</script>";

    }
?>

</body>
</html>