<?php 
date_default_timezone_set("Asia/Calcutta");
error_reporting(0);
    $time = date("H:i:s");
    $date = date("D M j\,Y");
    $d = explode(":", $time);
    $h = $d[0];
    $m = $d[1];
    $t = $d[2];
    if($h == '00' && $m == '00' && $t == '00'){
    	$fp = fopen("log.php", 'a');
    		
        fwrite($fp,'<center><hr>'.$date.'</hr></center>');
        
        fclose($fp);
    }
  
 ?>
<br><div class='msgln' style='height:auto;min-height:18px;color:#fff;display: auto;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:13 AM</i><br><b>haha</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***432</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:26 AM</i><br><b>hey</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:35 AM</i><br><b>ka baat ha</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:35 AM</i><br><b>kasisan ba</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:35 AM</i><br><b>dekhiye pandey ji</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:36 AM</i><br><b>aissa ha</b></div><br><div class='msgln' style='height:auto;min-height:18px;color:#fff;'><b style='color:#FF3300;'>@***316</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style='font-size:11px;'> 11:36 AM</i><br><b>ki</b></div>