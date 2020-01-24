<?php
require_once('connect.php');
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>BanglaWash - Discounts</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="assets/images/banglawash-logo.png"  >
      <div class="topnav">
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
      </div>
    </div>
    <div class="motto">
      <h1><img src="assets/images/banner1.jpg" ></h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <h1 style="text-align:center">Promotion</h1>
            <br><br><br><br>
          <table>
                  <col width="5%">
                  <col width="15%">
                  <col width="5%">



                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Discount</th>
                  </tr>


                   <tr>
                      <td>1.</td>
                      <td>Discount for Gold member</td>
                      <td>15%</td>
                  </tr>
                  <tr>
                     <td>2.</td>
                     <td>Discount for Silver member</td>
                     <td>5%</td>
                 </tr>



              </table>
              <br><br><br><br>
              <h2 style="text-align:center">Infrom staff at counter to use promotion </h2>
              <br><br><br><br>
              <a href="usermanagement.php">
                <h2 style="text-align:center">Go back</h2>
              </a>
        </div>





      </div>

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
