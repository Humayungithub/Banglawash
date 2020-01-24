<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bangla Wash - User</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="assets/images/banglawash-logo.png"  >
      <div class="topnav">
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
        <a href="index.php">Go back</a>
      </div>
    </div>
    <div class="motto">
      <h1><img src="assets/images/banner1.jpg" ></h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
    ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="assets/person.png"  />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>
              <div class="rightSecondRow">
                <a href="benefit.php">
                  <div class="viewHistorymWrapper">
                    <h1>View benefit of bonus point</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="assets/person.png"  >
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to receive Discounts";
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
  <?php  } ?>

    </div>
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
