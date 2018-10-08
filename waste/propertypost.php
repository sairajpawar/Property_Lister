<!doctype html>
<html lang="en-US">

<body style="background: ghostwhite">
<!--header started-->
<?php include "header.php" ?>
<!--header ends-->
<!--Breadcumb Start-->
<br>
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" >
            <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Post-Property</li>
    </ol>
</div>
<!--Breadcumb End-->
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="background-color:  #fdfdfe;margin-left: 17px" >
            <div class="col-md-6">
            <b><h2 style="color: #008000">PropertyInfo:-</h2></b><br>
            <form class="form-inline">
                <div class="form-group">
                    <label>Property For</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="property"  class="radio-inline "  value="sale"> Sale
                    <input type="radio" name="property" class="radio-inline" value="rent"> Rent
                </div>
                <br><br>
                <div class="form-group">
                    <label>Property Type</label>&nbsp;
                    <select class="form-control">
                        <option value="select" >Select</option>
                        <option value="residentalhouse">Residental House</option>
                        <option value="villa">Villa</option>
                        <option value="residentalplot">Residental Plot</option>
                    </select>
                </div>
                <b><h2 style="color: #008000">Location:-</h2></b><br>
                <div class="form-group">

                    <label>City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select class="form-control">
                        <option value="select" >Select</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="nashik">Nashik</option>
                        <option value="pune">Pune</option>
                        <option value="kolkata">kolkata</option>
                    </select>

                </div>
                <br><br>
                <div class="form-group">
                    <label>Locality</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="locality" class="form-control"><br><br>
                    <label>Name of Project<br>/Society</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="nameproject" class="form-control"><br><br>
                    <label>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="address" class="form-control"><br><br>
                    <label>Landmark</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="landmark" class="form-control"><br><br>
                    <label>Floor</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="floor" class="form-control"><br><br>
                    <label>Facing</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select class="form-control">
                        <option value="select" >Select</option>
                        <option value="east">East</option>
                        <option value="west">West</option>
                        <option value="north">North</option>
                        <option value="south">South</option>
                    </select>
                </div>
                <br><br>
                <b><h2 style="color: #008000">Area:-</h2></b><br>
                <div class="form-group">
                    <label>Plot Area</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="number" name="plotarea" class="form-control">Sq.ft<br><br>
                    <label>Plot Length</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="number" name="plotlength" class="form-control">ft<br><br>
                    <label>Plot Breadth</label>&nbsp;&nbsp;&nbsp;
                    <input type="number" name="plotbreadth" class="form-control">ft<br><br>
                    <label>BedRooms</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="bedrooms" class="form-control"><br><br>
                    <label>Car Parking</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="parking" class="form-control"><br><br>
                    <label>Water Availabilty</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="wavailable" class="form-control"><br><br>
                    <label>Status Of Electricity</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="eavailable" class="form-control"><br><br>
                    <label>Lift</label>&nbsp;&nbsp;
                    <select class="form-control">
                        <option value="zero">0</option>
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="fourth">4</option>
                        <option value="fifth">5</option>
                    </select><br><br>
                    <label>Furnishing</label>&nbsp;&nbsp;
                    <select class="form-control">
                        <option value="unfurnished">UnFurnished</option>
                        <option value="semifurnished">SEMI-Furnished</option>
                        <option value="fullyfurnished">FULLY-Furnished</option>
                    </select><br><br>
                    <label>Description</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" name="desp" class="form-control"><br><br>
                    <label>Contact</label>
                    <select class="form-control">
                        <option value="mobile">+91</option>
                    </select>&nbsp;&nbsp;&nbsp;
                    <input type="text" maxlength="10" name="contact" class="form-control"><br><br>

                </div>
                <br><br>
                <b><h2 style="color: #008000">Property Availability:-</h2></b><br>
                <div class="form-group">
                    <label>Transaction Type</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="property" class="radio-inline"  value="newproperty"> New Property
                    <input type="radio" name="property" class="radio-inline" value="resale"> Resale

                </div>
                <br><br>
                <b><h2 style="color: #008000">Price Details:-</h2></b><br>
                <div class="form-group">
                    <label>Expected Price</label>&nbsp;&nbsp;&nbsp;
                    Rs.<input type="number" name="price" class="form-control"><br>

                </div>
                <br><br>
                <b><h2 style="color: #008000">Photos:-</h2></b><br>
                <div class="form-group">
                    <input type="file" >
                </div>
                <br><br>
                <input type="checkbox">
                I am the owner/I have the authority to post this property.<br>
                I agree not to provide incorrect property information or state a discriminatory preference.<br>
                In case, the information does not comply with PropertyListers terms, PropertyListers.com has the <br>right to edit/remove the property from their site.
                <br><br>
                <center>
                    <?php
                    if(isset($_SESSION['user_name']))
                    {
                        ?>
                        <input type="submit" class="btn btn-success" value="Submit">
                    <?php
                    }
                    else
                        {
                            ?>
                            <button class="btn-danger btn" type="button"><a class="a" href="../Login.php"> Login and Submit</a></button>
                        <?php
                        }
                        ?>
                </center>
            </form></div>

            <div class="col-md-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3507.2408503199954!2d72.81596380226021!3d18.95483280663349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1537628382546" width="480" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
        </div>
    </div>
</body>