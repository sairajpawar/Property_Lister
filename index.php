<!doctype html>
<html lang="en-US">

<body style="background-color: ghostwhite">
<!--header started-->
<?php include "header.php"?>
<!--header ends-->
<!--banner-->
<div class="container-fluid">
    <div class="row">
        <div style="background-image: url('images/banner/<?php echo mysqli_fetch_assoc(mysqli_query($con,"select * from banner order by rand()"))['NAME'];?>');height: 450px;  background-repeat: no-repeat; background-size: cover;position: relative;">
            <center>
            <form method="get" action="Property.php" style="padding-top: 50px">
                <input class="form-control checkbox-inline" type="search" name="search_box" style="width: 300px;height: 40px;margin: 0px;" placeholder="Enter Location or landmark" required>
                <select class="form-control checkbox-inline dropdown" style="width: 100px;margin-left: -7px;height: 40px;padding: 0px" name="property_type">
                    <option  class="dropdown-item" value="FLAT">Flat</option>
                    <option class="dropdown-item" value="VILLA">Villa</option>
                    <option class="dropdown-item" value="PLOT">Plot</option>
                </select>
                <input class="btn btn-danger" type="submit" value="Search" name="search" style="margin-left:-5px;height: 40px">
            </form>
            </center>
        </div>

    </div>
</div>
<!--banner ends-->


<div class="container-fluid">
    <br>
    <?php
    $result=mysqli_query($con,"select distinct PROPERTY_TYPE from properties");
    while($name=mysqli_fetch_assoc($result)) {
        $property_type=$name['PROPERTY_TYPE'];
        ?>
        <div class="panel">
            <div class="panel-heading" style="margin-top: 5px;padding-top: 10px">
                <label><?php echo $property_type;?></label>
                <button class="btn-success btn" style="float: right" onclick="location.href='Property.php?type=<?php echo $property_type;?>'">View more</button>
            </div>
            <div class="panel-body">
                <?php
                $abc=mysqli_query($con,"select * from properties WHERE PROPERTY_TYPE='$property_type'ORDER BY rand()");
                $res=mysqli_fetch_assoc($abc);
                ?>
                <div class="row">
                    <a href="Property.php?pro_id=<?php echo $res['ID'];?>"><img src="images/<?php echo $res['PROPERTY_TYPE'];?>/<?php echo $res['NAME'];?>" style="width: 100%;height: 350px"></a>
                    <br>

                    <div class="container-fluid" style="padding: 0px!important;">
                        <?php
                        $xyz=mysqli_query($con,"select * from properties WHERE PROPERTY_TYPE='$property_type'ORDER BY rand() limit 4");
                        while ($diff_property=mysqli_fetch_assoc($xyz)) {
                            ?>
                            <a href="Property.php?pro_id=<?php echo $diff_property['ID'];?>">
                                <div class="col-md-3" style="margin: 0px!important;padding: 0px!important;">
                                    <div class="thumbnail" style="height: 280px;">
                                        <img src="images/<?php echo $diff_property['PROPERTY_TYPE'];?>/<?php echo $diff_property['NAME'];?>" style="width: 100%;height: 180px">
                                        <br>

                                        <label style="width: 100%;padding-left: 10px;font-size: 90%"><?php echo $diff_property['CARPET_AREA']." ".$diff_property['BEDROOMS']."/ ".$diff_property['PROPERTY_TYPE']." IN ".$diff_property['ADDRESS'];?></label>
                                        <br>
                                        <label style="width: 100%;padding-left: 10px;font-size: 90%">Price : <?php echo $diff_property['PRICE'];?></label>

                                    </div>
                                </div>
                            </a>
                            <?php
                        }?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }?>
</div>
<?php
include "footer3.php";?>
</body>
</html>