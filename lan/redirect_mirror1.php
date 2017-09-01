<?php 
error_reporting(0);
   if(isset($_GET['s']) && isset($_GET['sea']))
   {
   
     $s=$_GET['s'];
     $sea=$_GET['sea'];
     $t="hoc.mp4";
     $z=$s."/".$sea."/".$t;
     
   }
   
   
   
    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TV Shows || JRadioLAN</title>
      <!-- Material Design Icons -->
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!-- Font Awesome -->
         <link rel="stylesheet" href="css/font-awesome.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/mdb.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="css/style.css" rel="stylesheet">
      <style>
           @font-face {
         font-family: 'FontAwesome';
         src: url('css/fonts/fontawesome-webfont.eot?v=4.1.0') ;
         src: url('css/fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype');
         font-style: normal;
         font-weight: 400;
         }
         
         .demo-list-item {
         width: 300px;
         }
         table {
         border-collapse: collapse;
         border-spacing: 0;
         width: 100%;
         }
         th {
         border: none;
         text-align: center;
         padding: 8px;
         }
         td {
         border: none;
         text-align: left;
         padding: 14px;
         color:grey;
         font-size: 18px;
         background-color: #232323;
         }
         td:hover{
         background-color: #333333;
         color:white;
         cursor:pointer;
         }
         .abc:hover{
          background-color: #333333;
         color:white;
         cursor:pointer;
         }
         #list::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         #list::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
         }
         /* Handle */
         #list::-webkit-scrollbar-thumb {
         background: rgba(140, 140, 140,0.4); 
         -webkit-box-shadow: inset 0 0 6px rgba(140, 140, 140,0.5); 
         }
         #list::-webkit-scrollbar-thumb:window-inactive {
         background: rgba(51, 51, 51,0.4); 
         }
         #list::-webkit-scrollbar-thumb:hover {
         background: rgba(255, 255, 255,0.4); 
         }
         #list::-webkit-scrollbar-thumb:window-active {
         background: rgba(255, 255, 255,0.4); 
         }
         #link12{
          color:white;
          background-color: #333333;
         }
         
         #video-wrapper{
          position:relative;
         }
         #video-wrapper:before{
          content:" ";
          position:absolute;
          width:38px;
          height:36px;
          background:url('wm.png');
          background-size:25px 25px;
          right:18px;
          opacity: 0.9;
          top:10px;
          background-size:cover;

         }
       .video-box{
        height:431px;
       }
       #video{
        max-height:431px;
        height:431px;
        min-height:431px;
        width:99%;
        background:url('89.gif');
         background-color:black;
         background-size:40px 40px;
         background-repeat: no-repeat;
         background-position: center;
       }


      </style>
   </head>
   <body   style="background-color:#0d0d0d;">
      <header >
         <nav class="navbar black z-depth-1" role="navigation" id="nv" >
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand waves-effect waves-light" href="http://h2.juitradio.com"><img src="jr_logow.png" height="60" width="150"  class="img-responsive"style="float:left;top: -10px;margin-bottom:7px;position:relative;"/></a>
               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <form class="navbar-form navbar-right" role="search">
                     <div class="form-group waves-effect waves-light">
                        <input type="text" class="form-control" placeholder="Search" style="visibility: hidden;">                   
                     </div>
                  </form>
               </div>
            </div>
         </nav>
         <!--/.Navigation-->
      </header>
      <main class="mdl-layout__content">
         <div  class="container" >
            <div class="row">
               <h5 style="color:white; display:inline;" id="sr"><?php echo  $s ;?></h5>
               <p style="color:white; display:inline;font-size:18px;" id="son"><b><?php echo  $sea ;?></b></p>
               <p style="color:#FD4815; display:inline;font-size:18px;font-weight:bold;text-transform:uppercase" id="epod"><b></b></p>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;">
               <div id="video-wrapper" class="img-responsive">
                  <div id="video-box"></div>
                  <br>
                          <center>                                                             
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-play "></i> /&nbsp; <i class="fa fa-pause "></i></span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[SPACE BAR]</SPAN>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-arrows-alt fa-lg"></i> </span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[DOUBLE CLICK]</SPAN>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-volume-up fa-lg"></i> /&nbsp; <i class="fa fa-volume-down fa-lg"></i></span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[MOUSE SCROLL]</SPAN>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="font-size:14px;color:#FF3300"> <i class="fa fa-arrow-left "></i> /&nbsp; <i class="fa fa-arrow-right"></i></span> <SPAN STYLE="COLOR:WHITE;FONT-SIZE:14PX;">&nbsp;&nbsp;[SEEK 5 secs]</SPAN>
              </center>
                  </div>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;">
                  <div style="bottom:0;padding:4px;background-color:#1a1a1a;">
                     <h5 style="font-size:20px;color:white;">
                        <center><b>Episodes</b>
                     </h5>
                     </center>
                  </div>
                  <div style="height:auto;max-height:436px;width:auto;overflow-y:auto;background-color:#1a1a1a;" id="list">
                     <table id="myTable">
                     </table>
                  </div>
               </div>

            </div>
            <div class="row">
               
               </div>
         </div>
      </main>

      <!--script-->

      <script type="text/javascript" src="js/jquery.min.js"></script>

      <script>
             
$(document).ready(function(){
  $("#list").animate({ scrollTop: $(document).height() }, 1000);
	var sg=$("#sr").text()+"/"+$("#son").text()+"/Episode 12.mp4";
	var sub=$("#sr").text()+"/"+$("#son").text()+"/Episode 12.vtt";
	var c=$("#sr").text()+"/"+$("#son").text();$("#epod").text("EP12");playVideo('video-box',sg,sub);
	function playVideo(wrapperId,src,trackSrc){
		var wrapper=document.getElementById(wrapperId);
		$('#video').remove();var video=document.createElement("video");
		video.id="video";
		video.controls="controls";
		video.class="video";
		video.oncontextmenu="return false";
		$("#video").bind("contextmenu",function(e){
			e.preventDefault();
		});
		var source=document.createElement("source");
		source.src=src;
		source.type="video/mp4";
		source.id="abc";
		
		video.appendChild(source);
		wrapper.appendChild(video);
		video.addEventListener("loadedmetadata",function(){
			var track=document.createElement("track");
			track.kind="captions";
			track.label="English";
			track.default="default";
			track.srclang="en";
			track.src=trackSrc;
			this.appendChild(track);
		});
		video.load();
		video.play();
		
		var popo=document.getElementById('video');
		window.addEventListener("keydown", checkKeyPressed, false);
		var frameTime = 5;
		function checkKeyPressed(e) {
    if (e.keyCode == "37") {
    		if (popo.currentTime > 0) {
        popo.currentTime=popo.currentTime-frameTime;
    }
    }else if (e.keyCode == "39") { //right arrow
           
            	popo.currentTime=popo.currentTime+frameTime;
            
    }
}
		var current=0;
		var doScroll=function(e){
			e=window.event||e;
			var delta=Math.max(-1,Math.min(1,(e.wheelDelta||-e.detail)));
			current=current+delta;
			if(delta==1&&popo.volume<=0.9){
				popo.volume+=0.1;
			}
			if(delta==-1&&popo.volume>0.1)
			{
				popo.volume-=0.1;
			}
			e.preventDefault();
		};
			if(popo.addEventListener){
				popo.addEventListener("mousewheel",doScroll,false);
				popo.addEventListener("DOMMouseScroll",doScroll,false);
			}
				else{

					popo.attachEvent("onmousewheel",doScroll);
				}
					var video=document.getElementById('video');
				document.onkeypress=function(e){
					if((e||window.event).keyCode===32){
						video.paused?video.play():video.pause();
					}};
						$("#video").bind("contextmenu",function(e){
							e.preventDefault()});
						document.ondblclick=function(){
							if(video.requestFullscreen)
								{video.requestFullscreen();
								}
							else if(video.mozRequestFullScreen)
								{
									video.mozRequestFullScreen();
								}
							else if(video.webkitRequestFullscreen){
								video.webkitRequestFullscreen();
							}}}
								$.get(c+'/count.txt',function(data){
									for(var i=1;i<=data;i++){
										$('#myTable').append('<tr ><td class="abc" id="link'+i+'">Episode '+i+'<i class="fa fa-play right "></i></td></tr>');
									}
										for(var j=1;j<=data;j++){
											var id="#link"+j;$(id).click(function(){
												var sg=$("#sr").text()+"/"+$("#son").text()+"/"+$(this).text()+".mp4";
												var sb=$("#sr").text()+"/"+$("#son").text()+"/"+$(this).text()+".vtt";
												var cdo=$(this).text();
												if(cdo.length==9){
													var pp=cdo[0]+cdo[1]+"0"+cdo[8];$("#epod").text(pp);
												}
												else{
													var pp=cdo[0]+cdo[1]+cdo[8]+cdo[9];$("#epod").text(pp);
												}
												var a=$("#epod").text();
												if(a[2]=="0"){
													var b="Episode "+a[3];
												}else{
													var b="Episode "+a[2]+a[3];
												}for(k=1;k<=data;k++){
													if(($("#link"+k).text())!=b){
														$("#link"+k).css("color","grey");
														$("#link"+k).css("background-color"," #232323");
													}else{
														$("#link"+k).css("color","white");
														$("#link"+k).css("background-color","#333333");}
													}
													playVideo1('video-box',sg,sb);
													function playVideo1(wrapperId,src,trackSrc){
														var wrapper=document.getElementById(wrapperId);
														$('#video').remove();
														var video=document.createElement("video");
														video.id="video";
														video.controls="controls";
														video.oncontextmenu="return false";
														video.class="video";
														var source=document.createElement("source");
														source.src=src;source.type="video/mp4";
														source.id="abc";
														
														video.appendChild(source);
														wrapper.appendChild(video);
														video.addEventListener("loadedmetadata",function(){
															var track=document.createElement("track");
															track.kind="captions";
															track.label="English";
															track.default="default";
															track.srclang="en";
															track.src=trackSrc;
															this.appendChild(track);
														});
														video.load();
														video.play();
														var popo=document.getElementById('video');
														window.addEventListener("keydown", checkKeyPressed, false);
														var frameTime = 5;
														function checkKeyPressed(e) {
   														 if (e.keyCode == "37") {
    													if (popo.currentTime > 0) {
       														 popo.currentTime=popo.currentTime-frameTime;
   															 }
   																	 }else if (e.keyCode == "39") { //right arrow
           
            											popo.currentTime=popo.currentTime+frameTime;
            
    															}
																}
														var current=0;
														var doScroll=function(e){
															e=window.event||e;
															var delta=Math.max(-1,Math.min(1,(e.wheelDelta||-e.detail)));
															current=current+delta;
															if(delta==1&&popo.volume<=0.9){
																popo.volume+=0.1;
															}if(delta==-1&&popo.volume>0.1){
																popo.volume-=0.1;
															}
																e.preventDefault();
															};
															if(popo.addEventListener){
																popo.addEventListener("mousewheel",doScroll,false);
																popo.addEventListener("DOMMouseScroll",doScroll,false);}
																else{
																	popo.attachEvent("onmousewheel",doScroll);
																}
																var video=document.getElementById('video');
																document.onkeypress=function(e){
																	if((e||window.event).keyCode===32){
																		video.paused?video.play():video.pause();}};
																		$("#video").bind("contextmenu",function(e){e.preventDefault()});
																		document.ondblclick=function(){
																			if(video.requestFullscreen){
																				video.requestFullscreen();
																			}
																			else if(video.mozRequestFullScreen){
																				video.mozRequestFullScreen();
																			}else if(video.webkitRequestFullscreen){
																				video.webkitRequestFullscreen();}
																			}
																		}})}})});


  
      </script>
      <script type="text/javascript" src="js/mdb.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
</html>
