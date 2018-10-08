<!doctype html>
<html>
<body style="background: ghostwhite">
<?php
include "header.php";
if (isset($_GET['pro_id'])) {
    $id=mysqli_real_escape_string($con,$_GET['pro_id']);
    $lmn=mysqli_query($con,"SELECT p.*,u.name,u.contact FROM user u join properties p where p.id='$id' and p.uid=u.id");
    if(mysqli_num_rows($lmn)==1){
        $diff_property=mysqli_fetch_assoc($lmn);
        $user_name=$diff_property['name'];
        $user_contact=$diff_property['contact'];
    ?>
    <br>
    <div class="container-fluid">
        <ol class="breadcrumb" style="background-color: #0056b3">
            <li class="breadcrumb-item"><a class="a" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="a" href="Property.php">Property</a></li>
        </ol>
    </div>
        <div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Property Description</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class=" container-fluid row">
                            <img class="im" src="images/<?php echo $diff_property['PROPERTY_TYPE'];?>/<?php echo $diff_property['NAME'];?>">
                       <div class="col-md-4" style="margin: 0px;padding: 0px">
                           <img style="height: 70px;width: 100%;margin: 3px" src="images/<?php echo $diff_property['PROPERTY_TYPE'];?>/<?php echo $diff_property['IMAGE3'];?>">
                       </div>
                            <div class="col-md-4" style="margin: 0px;padding: 0px">
                                <img style="height: 70px;width: 100%;margin: 3px" src="images/<?php echo $diff_property['PROPERTY_TYPE'];?>/<?php echo $diff_property['IMAGE1'];?>">
                            </div>
                            <div class="col-md-4" style="margin: 0px;padding: 0px">
                                <img style="height: 70px;width: 100%;margin: 3px" src="images/<?php echo $diff_property['PROPERTY_TYPE'];?>/<?php echo $diff_property['IMAGE2'];?>">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4><b><?php echo $diff_property['CARPET_AREA']." ".$diff_property['BEDROOMS']."/ ".$diff_property['PROPERTY_TYPE']." IN ".$diff_property['ADDRESS'];?></b></h4>
                        <hr style="border: 1px solid black">
                        <table class="table">
                            <thead>
                            <th>Name</th>
                            <th>Details</th>
                            </thead>
                            <tbody>
                            <?php
                            if($diff_property['BEDROOMS']!=null) {
                                ?>
                                <tr class="info">
                                    <td style="font-size: 20px">Bedrooms</td>
                                    <td style="font-size: 20px"><?php echo $diff_property['BEDROOMS']; ?></td>
                                </tr>
                                <?php
                            }?>
                            <tr>
                                <td style="font-size: 20px">Carpet area</td>
                                <td style="font-size: 20px"><?php echo $diff_property['CARPET_AREA'];?></td>

                            </tr>
                            <tr>
                                <td style="font-size: 20px">Price</td>
                                <td style="font-size: 20px"><?php echo $diff_property['PRICE'];?></td>
                            </tr>
        <?php
        if($diff_property['FLOOR']!=null) {
            ?>
            <tr>
                <td style="font-size: 20px">Floor</td>
                <td style="font-size: 20px"><?php echo $diff_property['FLOOR']; ?></td>
            </tr>
            <?php
        }?>
                            </tbody>
                        </table>
                        <button class=" btn-lg btn-success" data-toggle="modal" data-target="#mycon">Get contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Brief Description</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>

<?php
echo $diff_property['DESCRIPTION'];
?>                            </tr>
                            <tr>
                                <td>
                                    Price Breakup
                                </td>
                                <td>
                                    <?php echo $diff_property['PRICE'];?> ₹ ,<?php echo $diff_property['PRICE']*5/100;?> Approx Registration Charges ₹. 1 Monthly
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    <?php echo $diff_property['ADDRESS']." ".$diff_property['LANDMARK'];?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Landmarks
                                </td>
                                <td>
                                    <?php echo $diff_property['LANDMARK'];?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Facing
                                </td>
                                <td>
                                    <?php echo $diff_property['FACING'];?>
                                </td>
                            </tr>
                            <?php
                            if($diff_property['OVERLOOKING']!=null)
                            {
                                ?>
                            <tr>
                                <td>
                                    Overlooking
                                </td>
                                <td>
                                    <?php echo $diff_property['OVERLOOKING'];?>
                                </td>
                            </tr>
                                <?php
                            }
                                ?>
                            <?php
                            if($diff_property['CAR_PARKING']!=null)
                            {
                                ?>
                            <tr>
                                <td>Car Parking</td>
                                <td><?php echo $diff_property['CAR_PARKING'];?></td>
                            </tr>
                            <?php
                            }
                                ?>
                            <?php
                            if($diff_property['WATER_AVAILABILITY']!=null)
                            {
                                ?>
                            <tr>
                                <td>Water Availability</td>
                                <td><?php echo $diff_property['WATER_AVAILABILITY'];?></td>
                            </tr>
                            <?php
                            }
                                ?>
                            <?php
                            if($diff_property['STATUS_OF_ELECTRICITY']!=null)
                            {
                                ?>
                            <tr>
                                <td>
                                    Status of Electricity
                                </td>
                                <td>
                                    <?php echo $diff_property['STATUS_OF_ELECTRICITY'];?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <?php
                            if($diff_property['LIFT']!=null)
                            {
                                ?>
                            <tr>
                                <td>
                                    Lift
                                </td>
                                <td>
                                    <?php echo $diff_property['LIFT'];?>
                                </td>
                            </tr>
                    <?php
                            }
                        ?>
                        <?php
                        if($diff_property['FURNISHING']!=null)
                        {
                            ?>
                            <tr>
                                <td>
                                    Furnishing
                                </td>
                                <td>
                                    <?php echo $diff_property['FURNISHING'];?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </table>
                        <button class="btn btn-success" data-toggle="modal" data-target="#mycon">Get contact</button>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <?php
        include "modal.php";?>
    <?php
}
else
    {
echo "<script>window.history.back()</script>";
    }}
    else if(isset($_GET['type'])){
    $type=mysqli_real_escape_string($con,$_GET['type']);?>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-2">
                    <div class="col-md-10">
                        <?php
                        $page_no=isset($_GET["pg_id"])?$_GET["pg_id"]:1;
                        $rows=6;
                        $start=($page_no-1)*$rows;

                        $query_for_property = mysqli_query($con, "select p.*,u.name,u.contact from properties p JOIN user u WHERE p.PROPERTY_TYPE='$type' AND p.uid=uid ORDER BY rand()limit $start,$rows");
                        while ($pro_row=mysqli_fetch_assoc($query_for_property)) {
                            $user_name=$pro_row['name'];
                            $user_contact=$pro_row['contact'];
                            ?>
                            <div class="thumbnail" style="width: 100%">
                                <div class="panel-body">
                                    <table style="width: 100%">
                                        <tr>
                                            <td class="col-md-4">
                                                <img src="images/<?php echo $pro_row['PROPERTY_TYPE'] ?>/<?php echo $pro_row['NAME'] ?>"
                                                     style="width: 200px;height: 150px">
                                            </td>
                                            <td style="width: 100%;padding: 0px!important;">
                                                <div class="col-md-12">
                                                    <label style="font-size: 10px;float: right;color: grey">for:
                                                        <?php echo $pro_row['PROPERTY_FOR'] ?></label>
                                                    <label style="font-size: 20px;color: gray"><?php echo $pro_row['CARPET_AREA'] . " " . $pro_row['BEDROOMS'] . "/ " . $pro_row['PROPERTY_TYPE'] . " IN " . $pro_row['ADDRESS']; ?></label>
                                                    <br>
                                                    <label style="font-size: 20px;color: gray">Price: <?php echo $pro_row['PRICE'] ?> </label>
                                                    <br>
                                                    <label style="font-size: 15px;color: gray"><?php if($pro_row['PROPERTY_FOR']=='SELL'){ echo ceil($pro_row['PRICE']/$pro_row['CARPET_AREA'])."/sq-ft";}
                                                        else
                                                        {
                                                            echo ceil($pro_row['PRICE']/12)."per month";
                                                        }?></label>
                                                    <br>
                                                    <button class="btn-danger btn" data-toggle="modal" data-target="#mycon">
                                                        Get Contact
                                                    </button>

                                                    <button class="btn-info btn"
                                                            style="padding-left: 20px;margin-left: 10px"
                                                            onclick="location.href='Property.php?pro_id=<?php echo $pro_row['ID'] ?>'">
                                                        View details
                                                    </button>
                                                    <br>
                                                    <label style="font-size: 10px;float: right;color: grey">Available
                                                        from: <?php echo $pro_row['DATE'] ?></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                        <center>
                            <ul class="pagination justify-content-center">
                                <?php if($page_no!=1){?>
                                    <li class="page-item">
                                    <a class="page-link" href="Property.php?pg_id=<?php echo $page_no-1?>&type=<?php echo $type?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li><?php }
                                ?>
                                <?php

                                $count_of_record= mysqli_query($con,"SELECT COUNT(ID) from properties WHERE PROPERTY_TYPE='$type' ");
                                $no_of_pages=ceil((int)mysqli_fetch_assoc($count_of_record)['COUNT(ID)']/$rows);
                                for ($pg_no=1;$pg_no<=$no_of_pages;$pg_no++) {
                                    ?>

                                    <?php
                                    if($page_no==$pg_no) {
                                        ?>
                                        <li class="page-item">
                                            <a  style="color: #f1001e !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no ?>&type=<?php echo $type?>"><?php echo $pg_no ?></a>
                                        </li>
                                        <?php
                                    }
                                    else {
                                        ?>
                                        <li class="page-item">
                                            <a style="color: black !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no?>&type=<?php echo $type;?>"><?php echo $pg_no?></a>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                                ?>
                                <?php if($page_no!=$no_of_pages){?>
                                    <li class="page-item">
                                        <a class="page-link" href="Property.php?pg_id=<?php echo $page_no+1?>&type=<?php echo $type?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </center>
                    </div>
                </div>

            </div>
        </div>
        <?php
}
else if(isset($_GET['pro_for'])){
        $property_for=mysqli_real_escape_string($con,$_GET['pro_for']);
?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2">
                <div class="col-md-10">
                    <?php
                    $page_no=isset($_GET["pg_id"])?$_GET["pg_id"]:1;
                    $rows=6;
                    $start=($page_no-1)*$rows;
                    $query_for_property = mysqli_query($con, "select * from properties WHERE PROPERTY_FOR='$property_for' ORDER BY rand()limit $start,$rows");
                    while ($pro_row=mysqli_fetch_assoc($query_for_property)) {
                        ?>
                        <div class="thumbnail" style="width: 100%">
                            <div class="panel-body">
                                <table style="width: 100%">
                                    <tr>
                                        <td class="col-md-4">
                                            <img src="images/<?php echo $pro_row['PROPERTY_TYPE']?>/<?php echo $pro_row['NAME']?>" style="width: 200px;height: 150px">
                                        </td>
                                        <td style="width: 100%;padding: 0px!important;">
                                            <div class="col-md-12">
                                                <label style="font-size: 10px;float: right;color: grey">for: <?php echo $pro_row['PROPERTY_FOR']?></label>
                                                <label style="font-size: 20px;color: gray"><?php echo $pro_row['CARPET_AREA']." ".$pro_row['BEDROOMS']."/ ".$pro_row['PROPERTY_TYPE']." IN ".$pro_row['ADDRESS'];?></label>
                                                <br>
                                                <label style="font-size: 20px;color: gray">Price: <?php echo $pro_row['PRICE']?> </label>
                                                <br>
                                                <label style="font-size: 15px;color: gray"><?php if($pro_row['PROPERTY_FOR']=='SELL'){ echo ceil($pro_row['PRICE']/$pro_row['CARPET_AREA'])."/sq-ft";}
                                                    else
                                                    {
                                                        echo ceil($pro_row['PRICE']/12)."per month";
                                                    }?></label>
                                                <br>
                                                <button class="btn-danger btn" onclick="location.href='Property.php?p_id=<?php echo $pro_row['ID'];?>'" >Get Contact</button>
                                                <button class="btn-info btn"
                                                        style="padding-left: 20px;margin-left: 10px" onclick="location.href='Property.php?pro_id=<?php echo $pro_row['ID']?>'">View details
                                                </button>
                                                <br>
                                                <label style="font-size: 10px;float: right;color: grey">Available
                                                    from: <?php echo $pro_row['DATE']?></label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <center>
                        <ul class="pagination justify-content-center">
                            <?php if($page_no!=1){?>
                                <li class="page-item">
                                <a class="page-link" href="Property.php?pg_id=<?php echo $page_no-1?>&pro_for=<?php echo $property_for?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li><?php }
                            ?>
                            <?php

                            $count_of_record= mysqli_query($con,"SELECT COUNT(ID) from properties WHERE PROPERTY_FOR='$property_for' ");
                            $no_of_pages=ceil((int)mysqli_fetch_assoc($count_of_record)['COUNT(ID)']/$rows);
                            for ($pg_no=1;$pg_no<=$no_of_pages;$pg_no++) {
                                ?>

                                <?php
                                if($page_no==$pg_no) {
                                    ?>
                                    <li class="page-item">
                                        <a  style="color: #f1001e !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no ?>&pro_for=<?php echo $property_for?>"><?php echo $pg_no ?></a>
                                    </li>
                                    <?php
                                }
                                else {
                                    ?>
                                    <li class="page-item">
                                        <a style="color: black !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no?>&pro_for=<?php echo $property_for?>"><?php echo $pg_no?></a>
                                    </li>
                                    <?php
                                }
                                ?>

                                <?php
                            }
                            ?>
                            <?php if($page_no!=$no_of_pages){?>
                                <li class="page-item">
                                    <a class="page-link" href="Property.php?pg_id=<?php echo $page_no+1?>&pro_for=<?php echo $property_for?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </center>
                </div>
            </div>

        </div>
    </div>
    <?php
    }
    else if(isset($_GET['search'])) {
        $search_content = mysqli_real_escape_string($con, $_GET['search_box']);
        $property_type = mysqli_real_escape_string($con, $_GET['property_type']);
        ?>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-2">
                    <div class="col-md-10">
                        <?php
                        $page_no=isset($_GET["pg_id"])?$_GET["pg_id"]:1;
                        $rows=6;
                        $start=($page_no-1)*$rows;
                        $query_for_property = mysqli_query($con, "select * from properties WHERE PROPERTY_TYPE='$property_type' AND ADDRESS LIKE '%$search_content%' OR LANDMARK LIKE '%$search_content%' OR DESCRIPTION LIKE '%$search_content%' limit $start,$rows");
                        while ($pro_row=mysqli_fetch_assoc($query_for_property)) {
                            ?>
                            <div class="thumbnail" style="width: 100%">
                                <div class="panel-body">
                                    <table style="width: 100%">
                                        <tr>
                                            <td class="col-md-4">
                                                <img src="images/<?php echo $pro_row['PROPERTY_TYPE']?>/<?php echo $pro_row['NAME']?>" style="width: 200px;height: 150px">
                                            </td>
                                            <td style="width: 100%;padding: 0px!important;">
                                                <div class="col-md-12">
                                                    <label style="font-size: 10px;float: right;color: grey">for: <?php echo $pro_row['PROPERTY_FOR']?></label>
                                                    <label style="font-size: 20px;color: gray"><?php echo $pro_row['CARPET_AREA']." ".$pro_row['BEDROOMS']."/ ".$pro_row['PROPERTY_TYPE']." IN ".$pro_row['ADDRESS'];?></label>
                                                    <br>
                                                    <label style="font-size: 20px;color: gray">Price: <?php echo $pro_row['PRICE']?> </label>
                                                    <br>
                                                    <label style="font-size: 15px;color: gray"><?php if($pro_row['PROPERTY_FOR']=='SELL'){ echo ceil($pro_row['PRICE']/$pro_row['CARPET_AREA'])."/sq-ft";}
                                                        else
                                                        {
                                                            echo ceil($pro_row['PRICE']/12)."per month";
                                                        }?></label>
                                                    <br>
                                                    <button class="btn-danger btn" onclick="location.href='Property.php?p_id=<?php echo $pro_row['ID'];?>'" >Get Contact</button>
                                                    <button class="btn-info btn"
                                                            style="padding-left: 20px;margin-left: 10px" onclick="location.href='Property.php?pro_id=<?php echo $pro_row['ID']?>'">View details
                                                    </button>
                                                    <br>
                                                    <label style="font-size: 10px;float: right;color: grey">Available
                                                        from: <?php echo $pro_row['DATE']?></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <center>
                            <ul class="pagination justify-content-center">
                                <?php
                                $count_of_record= mysqli_query($con,"SELECT * from properties WHERE PROPERTY_TYPE='$property_type'AND ADDRESS LIKE '%$search_content%' OR LANDMARK LIKE '%$search_content%' OR DESCRIPTION LIKE '%$search_content%'");
                              if(mysqli_num_rows($count_of_record)>0) {
                                  $no_of_pages = ceil(mysqli_num_rows($count_of_record) / $rows);
                                  for ($pg_no = 1; $pg_no <= $no_of_pages; $pg_no++) {
                                      ?>

                                      <?php
                                      if ($page_no == $pg_no) {
                                          ?>
                                          <li class="page-item">
                                              <a style="color: #f1001e !important;" class="page-link"
                                                 href="Property.php?pg_id=<?php echo $pg_no ?>&search_box=<?php echo $search_content ?>&property_type=<?php echo $property_type ?>&search=Search"><?php echo $pg_no ?></a>
                                          </li>
                                          <?php
                                      } else {
                                          ?>
                                          <li class="page-item">
                                              <a style="color: black !important;" class="page-link"
                                                 href="Property.php?pg_id=<?php echo $pg_no ?>&search_box=<?php echo $search_content ?>&property_type=<?php echo $property_type ?>&search=Search"><?php echo $pg_no ?></a>
                                          </li>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                  }
                              }
                              else
                                  {
                                  echo "<script>alert('No result found');</script>";
                                  echo "<script>window.history.back()</script>";
                                  }
                                ?>
                            </ul>
                        </center>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }
    else
        {
        ?>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-2">
                    <div class="col-md-10">
                        <?php
                        $page_no=isset($_GET["pg_id"])?$_GET["pg_id"]:1;
                        $rows=6;
                        $start=($page_no-1)*$rows;
                        $query_for_property = mysqli_query($con, "select * from properties  ORDER BY rand() limit $start,$rows");
                        while ($pro_row=mysqli_fetch_assoc($query_for_property)) {
                            ?>
                            <div class="thumbnail" style="width: 100%">
                                <div class="panel-body">
                                    <table style="width: 100%">
                                        <tr>
                                            <td class="col-md-4">
                                                <img src="images/<?php echo $pro_row['PROPERTY_TYPE']?>/<?php echo $pro_row['NAME']?>" style="width: 200px;height: 150px">
                                            </td>
                                            <td style="width: 100%;padding: 0px!important;">
                                                <div class="col-md-12">
                                                    <label style="font-size: 10px;float: right;color: grey">for: <?php echo $pro_row['PROPERTY_FOR']?></label>
                                                    <label style="font-size: 20px;color: gray"><?php echo $pro_row['CARPET_AREA']." ".$pro_row['BEDROOMS']."/ ".$pro_row['PROPERTY_TYPE']." IN ".$pro_row['ADDRESS'];?></label>
                                                    <br>
                                                    <label style="font-size: 20px;color: gray">Price: <?php echo $pro_row['PRICE']?> </label>
                                                    <br>
                                                    <label style="font-size: 15px;color: gray"><?php if($pro_row['PROPERTY_FOR']=='SELL'){ echo ceil($pro_row['PRICE']/$pro_row['CARPET_AREA'])."/sq-ft";}
                                                    else
                                                        {
                                                            echo ceil($pro_row['PRICE']/12)."per month";
                                                        }?></label>
                                                    <br>
                                                    <button class="btn-danger btn" onclick="location.href='Property.php?p_id=<?php echo $pro_row['ID'];?>'" >Get Contact</button>
                                                    <button class="btn-info btn"
                                                            style="padding-left: 20px;margin-left: 10px" onclick="location.href='Property.php?pro_id=<?php echo $pro_row['ID']?>'">View details
                                                    </button>
                                                    <br>
                                                    <label style="font-size: 10px;float: right;color: grey">Available
                                                        from: <?php echo $pro_row['DATE']?></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                            ?>
                        <center>
                            <ul class="pagination justify-content-center">
                                <?php if($page_no!=1){?>
                                    <li class="page-item">
                                    <a class="page-link" href="Property.php?pg_id=<?php echo $page_no-1?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li><?php }
                                ?>
                                <?php

                                $count_of_record= mysqli_query($con,"SELECT COUNT(ID) from properties");
                                $no_of_pages=ceil((int)mysqli_fetch_assoc($count_of_record)['COUNT(ID)']/$rows);
                                for ($pg_no=1;$pg_no<=$no_of_pages;$pg_no++) {
                                    ?>

                                    <?php
                                    if($page_no==$pg_no) {
                                        ?>
                                        <li class="page-item">
                                            <a  style="color: #f1001e !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no ?>"><?php echo $pg_no ?></a>
                                        </li>
                                        <?php
                                    }
                                    else {
                                        ?>
                                        <li class="page-item">
                                            <a style="color: black !important;" class="page-link" href="Property.php?pg_id=<?php echo $pg_no?>"><?php echo $pg_no?></a>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }
                                ?>
                                <?php if($page_no!=$no_of_pages){?>
                                    <li class="page-item">
                                        <a class="page-link" href="Property.php?pg_id=<?php echo $page_no+1?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </center>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }
    include "footer3.php";?>
</body>
</html>