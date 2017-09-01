<?php 
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");

include 'login.php';
include 'post.php';
if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $path_to_file = 'users.html';
    $file_contents = file_get_contents($path_to_file);
    $file_contents = str_replace($_SESSION['name'],"",$file_contents);
    file_put_contents($path_to_file,$file_contents); 
    session_destroy();
    header("Location: chat1.php"); //Redirect the user
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
    background-color:#0d0d0d;
}
#chatbox::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #424242;
}
#chatbox::-webkit-scrollbar
{
    width: 10px;
    background-color: #F5F5F5;
}

#chatbox::-webkit-scrollbar-thumb
{
    background-color: #ffffff;
    border: 2px solid #555555;
}
</style>
<title>Chat J Radio</title>
 <link rel="stylesheet" href="css/font-awesome.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/style.css" rel="stylesheet">
</head>
<body style="background-color: #111;">
 <?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper" style="color:#fff;">
    <div id="menu">
        <p class="welcome" style="font-size:18px;display:inline;">Hi,<b><?php echo " ".$_SESSION['name'];?> </b></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="logout" style="display:inline;font-size:14px;"><b><a id="exit" href="#" style="color:#FF3300">Exit Chat</a></b></p>
        <br>
        </br>
       
        <div style="font-family:verdana;font-size:12px;border:0;border-radius:4px;background-color:black;word-wrap:break-word;text-align:justify;padding:5px">Welcome to JUIT's global chat. Here you can pull request to get your favourite TV shows. Your conversation</b> should be <b>clean.</b>
        </div>
    </div>
    
      <hr style="width:30%;">

<div id="chatbox" style="overflow-y:auto;overflow-x:width:240px;height:268px;word-wrap:break-word;"><?php
if(file_exists("log.php") && filesize("log.php") > 0){
    $handle = fopen("log.php", "a");
    $contents = fread($handle, filesize("log.php"));
    fclose($handle);
     
    echo $contents;
}
?></div>     
    <form name="message" action="">
        <input type="text"  class="form-control" placeholder="Type here..." name="usermsg" type="text" id="usermsg" size="25" required style="width:69%;display:inline;color:white;font-size:16px;bottom:0;position:fixed;margin-bottom:5px;" >
        <button class="btn-floating btn-small blue" type="submit"  id="submitmsg" value="Send" style="background-color:#FF3300;bottom:0;position:fixed;margin-bottom:5px;right:0;"><i class="fa fa-paper-plane" style="margin-top:-2px;margin-left:-2px;"></i></button>
    </form>


 <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>

      <script type="text/javascript" src="js/mdb.js"></script>
      <script type="text/javascript" src="js/ajax.js"></script>

<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'chat1.php?logout=true';}      
    });
 //If user submits the form
    $("#submitmsg").click(function(){   
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});              
        $("#usermsg").attr("value", "");
        return false;
    });
    function loadLog(){     

        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div               
            },
        });
    }
    //Load the file containing the chat log
    function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "log.php",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }
    setInterval (loadLog, 1000);
});
</script>
<?php
}
?>
</body>
</html>