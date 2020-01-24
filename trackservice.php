<?php
require_once('connect.php');
session_start();

// echo "MID".$memberId;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>BanglaWash - Track</title>
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
      <h1><h1><img src="assets/images/banner1.jpg" ></h1></h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
        $memberId=$_SESSION['memberId'];
    ?>
    <div class="boxWrapper">


      <div class="">
        <table>
                <col width="5%">
                <col width="5%">
                <col width="5%">
                <col width="20%">
                <col width="15%">
                <col width="5%">
                <col width="10%">
                <col width="10%">
                <col width="5%">


                <tr>
                    <th>Service ID</th>
                    <th>Staff ID</th>
                    <th>Member ID</th>
                    <th>Date In</th>
                    <th>Date Out</th>
                    <th>Service status</th>
                    <th>Total price</th>
                    <th>View Details</th>

                </tr>
     <?php
          $q="SELECT * FROM `laundryservice` where  `memberId` = '$memberId' ORDER BY `serviceId`";
          $result=$mysqli->query($q);
          if(!$result){
            echo "Select failed. Error: ".$mysqli->error ;
            // break;
          }
         while($row=$result->fetch_array()){ ?>
           <?php
            $dashDateOut="";
            if ($row['dateOut']=="0000-00-00") {
              $dashDateOut="-";
            }
            else {
              $dashDateOut=$row['dateOut'];
            }
            $finishStatus="";
            if($row['serviceStatus']=="NF"){
              $finishStatus="Not finish";
            }
            else {
              $finishStatus="Finished";
            }
            ?>
                 <tr>
                    <td><?=$row['serviceId']?></td>
                    <td><?=$row['staffId']?></td>
                    <td><?=$row['memberId']?></td>
                    <td><?=$row['dateIn']?></td>
                    <td><?=$dashDateOut?></td>
                    <td><?=$finishStatus?></td>
                    <td><?=$row['totalPrice']?></td>
                    <td><a href='viewdetailforuser.php?serviceId=<?=$row['serviceId']?>'> <img src="assets/viewdetail.png" width="24" height="24"></a></td>
                </tr>
        <?php } ?>


            </table>
      </div>





    </div>
    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="assets/person.png"  />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to receive the Discounts"
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <form class="trackform" action="searchguest.php" method="post">
                <label for="trackname">Please enter service ID</label><br>
                <input type="text" name="searchServiceId" value="">

                <br><br>
                <input type="submit" name="searchServiceIdSubmit" value="submit">
              </form>

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
