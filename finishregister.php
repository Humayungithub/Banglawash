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

    <div class="registerContent">
      <div class="registerDiv">
        <?php
				if(isset($_POST['staffRegisterSubmit'])) {
          $status = $_POST["status"];
					$firstName = $_POST["firstName"];
					$lastName = $_POST["lastName"];
					$citizenNumber = $_POST["citizenNumber"];
          $dateOfBirth = $_POST["dateOfBirth"];
          $mobileNumber = $_POST["mobileNumber"];
          $address = $_POST["address"];
					$email = $_POST["email"];
					$userid = $_POST["userId"];
					$password = $_POST["password"];
					$rePassword = $_POST["rePassword"];
          $gender = $_POST["gender"];


          if($password==$rePassword){
            $password = md5($_POST["password"]);
            $q="INSERT INTO `STAFF` (`firstName`,`lastName`,`citizenNo`,`dateOfBirth`,`mobileNo`,`address`,`email`,`userStaff`,`passStaff`,`status`,`gender`) VALUES ('$firstName','$lastName','$citizenNumber','$dateOfBirth','$mobileNumber','$address','$email','$userid','$password','$status','$gender')";
          // $q= " INSERT INTO `staff` (`staffId`, `firstName`, `lastName`, `citizenNo`, `dateOfBirth`, `mobileNo`, `address`, `email`, `userStaff`, `passStaff`, `status`, `gender`)"." VALUES (NULL, 'ddd', 'ddd', 'ddd', '2018-11-14', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'STAFF', 'M')";
            $result=$mysqli->query($q);
            if(!$result){
              echo "INSERT failed. Error: ".$mysqli->error ;
              // break;
            }
            else {
              header("Refresh: 2; url=management.php");

              echo '<h1 style="text-align: center; font-family: monospace;">REGISTER DONE!.<h1>';
            }
          }
          else{
            header("Refresh: 2; url=management.php");
            echo "<h1>Password does not match!</h1>";
          }

				}
			?>

      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="assets/images/regisdone.jpg" alt="">
      </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="assets/images/banglawash-logo.png" border="0" />
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
