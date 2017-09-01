<?php
date_default_timezone_set("Asia/Calcutta");
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    if($text == '')
     fwrite($fp, " ");
	else{
    $fp = fopen("log.php", 'a');
    $time = date("H:i:s");
    $date = date("d-m-Y");
    $d = explode(":", $time);
    $h = $d[0];
    $m = $d[1];
    $s = $d[2];
    $name = $_SESSION['name'];
    $name = substr_replace($name,"***",0,3);
    fwrite($fp, "<br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'>"."<b style='color:#FF3300;'>@".$name."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> ".date("g:i A")."</i><br><b>".stripslashes(htmlspecialchars($text))."</b>"."</div>");
    if($_SESSION['name'])
    	    fwrite($fp, "");
    else
    	    fwrite($fp, "<hr>");


    fclose($fp);
}
}

?>