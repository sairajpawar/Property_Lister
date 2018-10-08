<!doctype html>
<html>
<body style="background: ghostwhite">
<?php
include "header.php";
if(isset($_SESSION['user_name'])) {
    $uname=$_SESSION['user_name'];
    $user_detail_query=mysqli_query($con,"select * from user where email='$uname'");
    $user_detail=mysqli_fetch_assoc($user_detail_query);
    ?>
    <br>
    <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img col-md-10">
                        <img src="images/profile/<?php echo $user_detail['image'];?>" alt="" style="width: 100%"/>
                        <div class="file btn btn-primary">
                            Change Photo
                            <form action="" method="post" enctype="multipart/form-data" style="width: 100%">
                            <input type="file" name="profile">
                                <input class="btn" type="submit" value="ok" name="ok">
                            </form>
                            <?php
                            if(isset($_FILES['profile']))
                            {
                                $pro_img=$_FILES['profile']['name'];
                                @$pro_img_tmp=$_FILES['profile']['tmp_name'];
    $e=$user_detail['email'];
    move_uploaded_file($pro_img_tmp,"images/profile/$pro_img");
    if(mysqli_query($con,"update user set image='$pro_img' WHERE email='$e'"))
    {
        echo "<script>alert('Successfully updated');</script>";
        echo "<script>window.history.back()</script>";
    }
    else
        {
            echo "<script>alert('Successfully not updated');</script>";
            echo "<script>window.history.back()</script>";
        }
}
                            ?>

                        </div>
                        <br>
                        <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user_detail['email'];?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user_detail['name'];?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user_detail['email'];?></p>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user_detail['contact'];?></p>
                            </div>
                        </div>
<?php
if(isset($_GET['pro_id']))
{
$p_id=mysqli_real_escape_string($con,$_GET['pro_id']);
$del_query=mysqli_query($con,"delete from properties WHERE ID='$p_id'");
if($del_query)
{
    echo "<script>alert('Successfully removed the property');</script>";
    echo "<script>window.history.back();</script>";
}
else
    {
        echo "<script>alert('Something went wrong');</script>";
        echo "<script>window.history.back();</script>";
    }
}
?>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-head">
                        <h3>
                            <?php echo $user_detail['name'];?>
                        </h3>
                        <div class="container-fluid heading panel-heading">
                            <h4>Property Posted</h4>
                        </div>
                        <div class="row">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <th>
                                    Property type
                                </th>
                                <th>
                                    Property name
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>

                                </th>
                                </thead>
                                <tbody>
                                <?php
                                $user_id=$user_detail['id'];
                                $property_result=mysqli_query($con,"select * from properties where uid='$user_id'");
                                while($row=mysqli_fetch_assoc($property_result)){
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['PROPERTY_TYPE'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['CARPET_AREA']." ".$row['BEDROOMS']."/ ".$row['PROPERTY_TYPE']." IN ".$row['ADDRESS'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['PRICE']." Rs";?>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" onclick="location.href='Profile.php?pro_id=<?php echo $row['ID']?>'">X</button>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <?php
}
include "footer3.php";?>
</body>
</html>