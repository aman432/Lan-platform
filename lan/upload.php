<?php 
error_reporting(0);
include 'connection.php';
if(isset($_POST['submit'])){
  $error = array();
  $title = $_POST['title'];
  $tags = $_POST['tags'];
  $upload_type = $_POST['options'];
  $num = $_POST['num'];
  $desc = $_POST['desc'];
  $rating = $_POST['rating'];
  $target_dir = "/opt/lampp/htdocs/lan/clip/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
      array_push($error,"Sorry, file already exists.");
      $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 2000000) {
   array_push($error,"Sorry, your file is too large.");
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   array_push($error,"Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    $uploadOk = 0;
}
if($uploadOk == 0)
  $uploadOk = 0;
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      $query = mysql_query("INSERT INTO f_handle (title,tags,description,upload_type,num,rating,image) values('$title','$tags','$desc','$upload_type','$num','$rating','$file')");
      
      $message = "Uploaded Successfully!";
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
} 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Admin-Panel</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    .mdl-layout {
  align-items: center;
  justify-content: center;
}
.mdl-layout__content {
  padding: 24px;
  flex: none;
}
.mdl-button--file input {
  cursor: pointer;
  height: 100%;
  right: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 300px;
  z-index: 4;
}
.mdl-textfield--file .mdl-textfield__input {
  box-sizing: border-box;
  width: calc(100% - 32px);
}
.mdl-textfield--file .mdl-button--file {
  right: 0;
}
input {
  -webkit-transition: box-shadow 0.5s;
  transition: box-shadow 0.5s;
}
input:focus {
  outline: none;
  box-shadow: -8px 10px 0px -7px #4EA6EA, 8px 10px 0px -7px #4EA6EA;
}
div .mdl-textfield__label:after {
  background: none;
}
.errors{
  margin-right: -2%;
}
    </style>
   <script>
function check(browser) {
    document.getElementById("movi").innerHTML=browser;
}
</script>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll" style="background-color: #F4511E;margin-top: 8.5%;">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">JRadio Admin</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
        </div>
      </header>
      <div class="demo-ribbon" style="background-color: #FF5722;"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid" style="width:800px;height: 600px;margin-right: -8%;">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        
         
  <main class="mdl-layout__content">
    <div class="mdl-card mdl-shadow--6dp" style="height:100%;width:100%;">
      <div class="mdl-card__title" style="background:#FF5722;color:#fff;">
        <h2 class="mdl-card__title-text">Upload Center</h2>
        <?php 
        if($uploadOk == 0){
          
          for($i=0;$i<sizeof($error);$i++){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $error[$i]."<br>";
                }
               
        }
        else if($message){
          echo "&nbsp;&nbsp;&nbsp;&nbsp;";
          echo $message;
        }
          ?>
        

      </div>
      <div class="mdl-card__supporting-text">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" name="title" type="text" id="username" style="width:800px;"/>
            <label class="mdl-textfield__label" for="username">Title</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" name="tags" id="userpass" style="width:800px;"/>
            <label class="mdl-textfield__label" for="userpass">Tags</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" name="desc" id="username" style="width:400px;white-space:normal;"></textarea>
            <label class="mdl-textfield__label" for="username">Description</label>
          </div><br> <div class="mdl-textfield mdl-js-textfield">
            <!-- Radio Button 1 -->
 <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="android">
  <input type="radio" id="android" class="mdl-radio__button" name="options" onclick="check(this.value)" value="No_of_Seasons" checked  style="color: #FF5722;"/>
                              <!-- intitial state checked using attribute checked  -->
  <span class="mdl-radio__label">TV Series</span>
</label>
   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 <!-- Radio Button 2 -->
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="windows" >
  <input type="radio" id="windows" class="mdl-radio__button" name="options" onclick="check(this.value)" value="No_Of_Parts" style="background-: #FF5722;"/>
  <span class="mdl-radio__label">Movies</span>
</label>
          </div>
           <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="num" min="1" max="10" style="width:800px;"/>
            <label class="mdl-textfield__label" for="username" id="movi">No_of_Seasons</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="rating" min="1" max="10" step="0.01" id="username" style="width:800px;"/>
            <label class="mdl-textfield__label" for="username">Rating</label>
          </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
  <input class="mdl-textfield__input" placeholder="No file chosen" type="text" id="TEXT_ID" readonly />
  <div class="mdl-button mdl-button--icon mdl-button--file">
    <i class="material-icons">attach_file</i>
    <input type="file" name="fileToUpload" id="fileToUpload" onchange="document.getElementById('TEXT_ID').value=this.files[0].name;" >
  </div>
</div>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" name="submit" style="color: #FF5722;">Submit</button>
      </div>
      </form>
    </div>
  </main>
</div>
        </div>
     
      </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
