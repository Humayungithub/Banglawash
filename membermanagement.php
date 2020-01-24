<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>BanglaWash - Manage Member</title>
    <link rel="stylesheet" type="text/css" href="style.css">

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
    <div class="motto">
      <h1><img src="assets/images/banner1.jpg" ></h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <!-- INSERT CODE HERE -->
          <table>
                  <col width="5%">
                  <col width="15%">
                  <col width="5%">
                  <col width="10%">
                  <col width="10%">
                  <col width="5%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">

                  <tr>
                      <th>Member ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Mobile No.</th>
                      <th>Member Type.</th>
                      <th>Bonuspoint</th>
                      <th>email</th>
                      <th>ID</th>
                      <th>Password</th>
                  </tr>
  		 <?php
  				 	$q="SELECT *,m_TypeName FROM `member`,m_type WHERE `memberTypeId` = m_TypeId";
  					$result=$mysqli->query($q);
  					if(!$result){
  						echo "Select failed. Error: ".$mysqli->error ;
  						// break;
  					}
  				 while($row=$result->fetch_array()){ ?>
                   <tr>
                      <td><?=$row['memberId']?></td>
                      <td><?=$row['firstName']?> <?=$row['lastName']?></td>
                      <td><?=$row['gender']?></td>
                      <td><?=$row['mobileNo']?></td>
                      <td><?=$row['m_TypeName']?></td>
                      <td><?=$row['bonusPoint']?></td>
                      <td><?=$row['email']?></td>
                      <td><?=$row['memberUserId']?></td>
                      <td><?=$row['password']?></td>
                      <td><a href='modmemberinfo.php?userid=<?=$row['memberId']?>'> <img src="assets/modify.png" width="24" height="24"></a></td>
                      <td><a href='delmemberinfo.php?userid=<?=$row['memberId']?>'> <img src="assets/delete.png" width="24" height="24"></a></td>
                  </tr>
  				<?php } ?>


              </table>
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

</html>
