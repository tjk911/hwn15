<?php

/********************************************
Lohud Admin tool
by: Kai
ver 1.1

Template to build a secure admin panel with
Default timeout is 30 mins
Requires PHP 5.3+ for blowfish hashing
********************************************/


//Filter any nasty input, limit user and pass to be no more than 32 chars, shutoff error reporting
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (strlen($_POST['u']) > 32 || strlen($_POST['p']) > 32) die();
error_reporting(0);


// //Import credentials and init variables
require('login_cred.php');
$page = "login.php";
$submitted_username = "";
$fail_message = "";


//Check to see if the user is already logged in and hasn't timed out, if so bypass login page
session_start();
if(!empty($_SESSION['user'])){
    if ($_SESSION['timeout'] + 1800 >= time()){
        $_SESSION['timeout'] = time(); 
    }
} else {
  header("Location: " . $page); 
  die("Redirecting to " . $page);
}


//Credentials are being passed through the form, see if they're legit
if(!empty($_POST)){
    foreach ($credentials as $entry) {
        if ($_POST['u']===$entry['user']){
            if (crypt($_POST['p'], $entry['pass'])===$entry['pass']){
                //Username and password good
                session_start();
                $_SESSION['user'] = $entry['name'];
                $_SESSION['timeout'] = time();
                session_write_close(); 
                header("Location: " . $page); 
                die("Redirecting to: " . $page);
            }
            else {
                //Password failed
                $submitted_username = htmlentities($_POST['u'], ENT_QUOTES, 'UTF-8');
                $fail_message = "Login Failed";
            }
        }
        else {
            //Username failed
            $submitted_username = htmlentities($_POST['u'], ENT_QUOTES, 'UTF-8');
            $fail_message = "Login Failed";
        }
    }
}



?>
<?php
  include('header.php');
?>
<style type="text/css">
  body { 
    width: 100%;
    height:100%;
    font-family: 'Open Sans', sans-serif;
    background: #f2f2f2;
  }
</style>
<div class="row">
  <div class="large-12 columns">
    <h2 style="margin:0.5rem 0 0">Food admin</h2>
  </div>
</div>
<div class="row" style="padding-bottom:50px;">
  <div class="large-12 columns">
      <table id="markers">
        <thead>
          <tr>
            <th>profileid</th>
            <th>name</th>
            <th>city</th>
            <th>address</th>
            <th>bizurl</th>
            <th>desc</th>
            <th>lat</th>
            <th>lng</th>
            <th>url</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $entries = file_get_contents('entries.json');
            $decode = json_decode($entries, true);
            // echo $decode;

            for ($i = 0; $i < count($decode); $i++){
              echo "<tr class='marker'>
                      <td contenteditable='true'>".$decode[$i]['profileid']."</td>
                      <td contenteditable='true'>".$decode[$i]['name']."</td>
                      <td contenteditable='true'>".$decode[$i]['city']."</td>
                      <td contenteditable='true'>".$decode[$i]['address']."</td>
                      <td contenteditable='true'>".$decode[$i]['bizurl']."</td>
                      <td contenteditable='true'>".$decode[$i]['desc']."</td>
                      <td contenteditable='true'>".$decode[$i]['lat']."</td>
                      <td contenteditable='true'>".$decode[$i]['lng']."</td>
                      <td contenteditable='true'>".$decode[$i]['url']."</td>
                    </tr>";
            };
          ?>          
        </tbody>
      </table>
      <button class="radius small" id="convert-table" style="color:#f2f2f2;" data-reveal-id="myModal">Save</button>
      <a href="form.php"><button class="radius small" style="color:#f2f2f2;">Add new profile</button></a>
      <!-- <div id="debug"></div> -->
      <div id="myModal" class="reveal-modal" data-reveal>
        <h2>Success!</h2>
        <p>Your submission has been recorded and saved.</p>
        <p><a href="#" onclick="location.reload();">Refresh page</a>.</p>
        <a class="close-reveal-modal">&#215;</a>
      </div>
  </div>
</div>
<?php
  include('footer.php');
?>