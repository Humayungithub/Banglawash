<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>BanglaWash</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="assets/images/banglawash-logo.png"  >
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>

  <body>
    <?php
            $userid = $_GET['userid'];
    				$q = "select * from staff where staffId=$userid";
    				$result = $mysqli->query($q);
    				if(!$result){
    					echo "Select failed: ".$mysqli->error;
    				}
    				$urow = $result->fetch_array();
// echo $urow['gender'];
     ?>
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Modify (STAFF)</h1>
        <hr>
        <br>
        <form action="modify.php" method="post">

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" value="<?=$urow['firstName']?>">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" value="<?=$urow['lastName']?>">

          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M" <?php if($urow['gender']== "M"){ echo "selected";} ?>>Male</option>
            <option value="F" <?php if($urow['gender']== "F"){ echo "selected";}?>>Female</option>
          </select>

          <label for="citizenNo">Citizen Number</label>
          <input type="text" id="citizenNo" name="citizenNumber" value="<?=$urow['citizenNo']?>">

          <label for="dob">Date of birth</label>
          <input type="date" id="dob" name="dateOfBirth" value="<?=$urow['dateOfBirth']?>"><br>

          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" value="<?=$urow['mobileNo']?>">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" value="<?=$urow['address']?>">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" value="<?=$urow['email']?>">

          <label for="staffId">StaffId</label>
          <input type="text" id="staffId" name="staffId" value="<?=$urow['staffId']?>" readonly>

          <input type="submit" name="staffModifySubmit"value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="assets/regisdone.jpg" alt="">
      </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="assets/images/banglawash-logo.png" >
      </div>
      <div class="leftFooter">
        <h1 id="followUs">Follow us </h1>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="assets/facebook.png"  />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="assets/ig.png" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="assets/twitter.png"  />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h1>CSE370 Project| Created by</h1>
        </div>
        <div class="nameList">
          <ul id="name">
            <li>Humayun Ahmed</li>
            <li>Sadman Sakib</li>
            <li>Rownak Shahriyer</li>
            <li>Saraf Noor Khaled</li>
          </ul>

        </div>
      </div>
    </div>
  </footer>

  </body>

  </html>
