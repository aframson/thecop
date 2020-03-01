<?php
session_start();
include 'engine.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    

         <div class="h1">
             <img id="logo" src="assets/media/logos/pente.jpeg" alt="" srcset="">
                       <center>
                              <h1 id="he">THE CHURCH OF PENTECOST</h1>
                              <div class="ana" >Kwadaso Agric District. Nsem Assemblies</div>
                              <div class="ana">Post Office Box KW 101.</div>
                              <div class="ana">Kwadaso - Kumasi</div>
                              <div class="ana">https://www.copkadna.com.gh</div>
                              <div class="anax">Membership Registration Certificate</div>
                            </center>
         </div>
         <div class="h2">
             <div class="pane">
                 <div class="det"><?php  echo UserInfo('fname') .' '. UserInfo('lname')?> </div>
                 <div class="det"><?php  age(UserInfo("dob")) ?></div>
                 <div class="det"><?php echo  UserInfo('assembly').', '. UserInfo('ministry').', '.UserInfo('groups')?></div>
                 <div class="det"><?php echo  UserInfo('addr_li_1') ?></div>
                 <div class="det"><?php echo  UserInfo('cop') ?></div>
             </div>

            <div class="cont">
                  <div class="greet">Dear <?php echo  UserInfo('fname') .' '. UserInfo('lname')?> </div>
                  <p id="tell">You are registerd into the COPKADNA system database as a memeber</p>
                  <br>
                  <ul>
                      <li>Your registration ID is [ Put registration ID number here ]</li>
                      <li>Your login credentials is [<a href="#">username: <?php echo  UserInfo('uname') ?></a>] and password : <?php echo  UserInfo('pass') ?></li>
                      <li>Date and Time of registration is <?php echo  UserInfo('dor') ?></li>
                      <li>You are hereby registered into the <?php echo  UserInfo('ministry') ?>, <?php echo  UserInfo('groups') ?></li>
                  <p id="">
                  For further details, contact the local secretary 
                  <br>
                  <br><br><br>

                  Prosper Ezekiel <br>
                  IT Administrator <br>
                 <br>
                  CC. The District Pastor <br>
                  The Presiding Elder <br>
                  Local Secretary <br>
                  Ministry Leaders <br>

                  </p>

                      

                  </ul>
                  <?php
           include 'QRgen/qrlib.php';
          
        
           $back_color = 0x0ffffff;
           $fore_color = 0x0000000;
           $cntent = 'localhost/thecop/member-account-information.php?id='.UserInfo('id');
           QRcode::png($cntent, 'files/file.png', 'H', 4, 4,false, $back_color, $fore_color);

           echo '<img id="q" src="files/file.png">';
           


    ?>
            </div>
         </div>
       



</body>
</html>