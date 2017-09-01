<?php
session_start();
 
function loginForm(){
    echo'
    <div id="d" class="verticalcenter">
                <center>

    <div id="loginform" >
    <form action="chat1.php" method="post">
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Roll Number" pattern="-?[0-9]*(\.[0-9]+)?" maxlength="6" min="6" style="width:70%;">
    <button  type="submit" name="enter" id="enter" value="Enter" class="btn btn-primary" >Start Chat</button>
       </center>
    </form>
    </div>
    ';
}
function check($name){

    if(strlen($name)==6 && ord($name[0])==49 && ord($name[1])>=51 && ord($name[1])<=54 && ord($name[2])>=48 && ord($name[2])<=56 && ord($name[3])>=48 && ord($name[3])<=56 && ord($name[4])>=48 && ord($name[4])<=57 && ord($name[5])>=48 && ord($name[5])<=57 )
        return 1;
    else
        return 0;
} 
function validate($name){

    if( strpos(file_get_contents("users.html"),$name) == false) {
        return 1;
    }
    else
        return 0;
}
if(isset($_POST['enter'])){
    if($_POST['name'] != "" && check($_POST['name'])) {
        if(validate($_POST['name'])){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        $fp = fopen("users.html", 'a');
        fwrite($fp, $_SESSION['name']." ");
        fclose($fp);
    }
    else{
        echo '<center><b><span style = "color:#F44336;">User Already Logged in.</span></b></center>';
    }
    }
    else{
        echo '<center><b><span style = "color:#F44336;">Please! type in an Valid Roll No.</span></b></center>
';
    }
}
?>