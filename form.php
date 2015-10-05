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

  h1, h2, h3, h4, h5, h6, p {
  }
</style>

<form enctype="multipart/form-data" method="POST" action="insert.php">
  <div class="row">
    <h3>Insert business info <a href="admin.php" style="font-size:.45em;">Back to admin</a></h3>
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Business name</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="name" name="name" placeholder="eg: Market North" required="required">
        </div>
      </div>
    </div>
    <!-- <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Value 1</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="value1" name="value1" placeholder="eg: " required="required">
        </div>
      </div>
    </div> -->
    <!-- <div class="large-6 columns">
      <label>
        <input type="text" id="name" name="name" placeholder="Name" required="required" value="<?php echo $name;?>"/>
      </label>
    </div> -->
  </div>
<!--   <div class="row">
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Field 1</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="field1" name="field1" placeholder="eg: Name" required="required">
        </div>
      </div>
    </div>
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Value 1</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="value1" name="value1" placeholder="eg: Samuel Vimes" required="required">
        </div>
      </div>
    </div>
  </div> -->
  <div class="row">
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">City</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="city" name="city" placeholder="eg: Armonk">
        </div>
      </div>
    </div>
    <!-- <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Value 2</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="value2" name="value2" placeholder="eg: Armonk">
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Address</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="address" name="address" placeholder="eg: 387 Main St., Armonk, 914-273-3773">
        </div>
      </div>
    </div>
    <!-- <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Value 3</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="value3" name="value3" placeholder="eg: City Watch">
        </div>
      </div>
    </div> -->
  </div> 
  <div class="row">
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">URL</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="bizurl" name="bizurl" placeholder="eg: mktnorth.squarespace.com/#marketnorth">
        </div>
      </div>
    </div>
    <!-- <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Value 4</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="value4" name="value4" placeholder="eg: It's impolite to ask">
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="large-6 columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Description</span>
        </div>
        <div class="small-9 columns">
          <label>
            <textarea type="text" id="desc" name="desc" placeholder="An innovative new space from the team behind Restaurant North in Armonk. Market North quietly held a soft opening in late-June and is just now ramping up to a full menu of services, of which there are many. Three-time James Beard Award nominated chef Eric Gabrynowicz has taken his carefully curated, locally-sourced cuisine and made it more affordable and accessible. The menu has everything from coffee and sandwiches to easy dinners to-go, delivery, catering and even a seat at an intimate chef’s table, where guests can enjoy a customized multi-course farm-driven menu. Also look for cooking workshops, wine events and fundraisers to support No Kid Hungry."></textarea>
          </label>
        </div>
      </div>
    </div>
    <!-- <div class="large-6 columns">
       
    </div> -->
  </div>
  <div class="row">
    <div class="large-3 left columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Lat</span>
        </div>
        <div class="small-9 columns">
          <input type="text" id="lat" name="lat" placeholder="Lat">
        </div>
      </div>
    </div>
    <div class="large-3 left columns">
      <div class="row collapse prefix-radius">
        <div class="small-3 columns">
          <span class="prefix">Lng</span>
        </div>
        <div class="small-9 columns">
        <input type="text" id="lng" name="lng" placeholder="Lng">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
        Select image to upload:
            <input name="fileToUpload" id="fileToUpload" type="file" />
    </div>
  </div>
  <!-- <div class="row">
    <div class="large-6 columns">
        <label>
          <input type="text" id="credit" name="credit" placeholder="Photo credit"/>
        </label>
    </div>
  </div> -->
  <div class="row">
      <div class="small-3 columns">
          <input href="#" class="button" type="submit">
      </div>
  </div>
  
</form>
    <div id="myModal" class="reveal-modal" data-reveal>
      <h2>Success!</h2>
      <p>Your submission has been recorded and saved.</p>
      <p><a href="#" onclick="location.reload();">Refresh page</a> or return to <a href="admin.php">admin page</a>.</p>
      <a class="close-reveal-modal">&#215;</a>
    </div>
<?php
  include('footer.php');
?>