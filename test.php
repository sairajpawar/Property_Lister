<!doctype html>
<html>
<body>
<?php
if(isset($_FILES['profile']))
{
    $pro_img=$_FILES['profile']['name'];
    @$pro_img_tmp=$_FILES['profile']['tmp_name'];
//    $e=$user_detail['email'];
//    move_uploaded_file($pro_img_tmp,"../images/profile/$pro_img");
//    if(mysqli_query($con,"update user set image='$pro_img' WHERE email='$e'"))
//    {
//        echo "<script>alert('Successfully updated');</script>";
//        echo "<script>window.history.back()</script>";
//    }
//    else
//    {
//        echo "<script>alert('Successfully not updated');</script>";
//        echo "<script>window.history.back()</script>";
//    }
    echo $pro_img;
}
else
    {
        echo "upload a file";
    }?>
</body>
</html>
