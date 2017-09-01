<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="pragma" content="no-cache" />
      <meta http-equiv="cache-control" content="max-age=0" />
      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="expires" content="0" />
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
         body{
         overflow-x: hidden;
         }
         @font-face {
         font-family: 'FontAwesome';
         src: url('css/fonts/fontawesome-webfont.eot?v=4.1.0') ;
         src: url('css/fonts/fontawesome-webfont.eot?#iefix&v=4.1.0') format('embedded-opentype');
         font-style: normal;
         font-weight: 400;
         }
         
         #loader {
         z-index: 1;
         width: 50px;
         height: 50px;
         border: 8px solid #f3f3f3;
         border-radius: 50%;
         border-top: 8px solid #FF3300;
         width: 50px;
         height: 50px;
         -webkit-animation: spin 0.8s linear infinite;
         animation: spin 0.8s linear infinite;
         }
         @-webkit-keyframes spin {
         0% { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         #maic,#nv{
         display: none;
         }
         #main-carousel{
         display:none;
         }
         #hero:after {
         content:'';
         display: block;
         position: absolute;
         bottom:100%;
         left: 54%;
         margin-left: -50px;
         width: 0;
         height: 0;
         border-bottom: solid 30px #1C2331;
         border-top: solid 30px transparent;
         border-left: solid 30px transparent;
         border-right: solid 30px transparent;
         }
         #hero {
         display: inline-block;
         position:relative;
         background-color:#1C2331;
         height:320px !important;
         width:100% !important;
         }
         #hero1:after {
         content:'';
         display: block;
         position: absolute;
         bottom:100%;
         left: 90%;
         margin-left: -50px;
         width: 0;
         height: 0;
         border-bottom: solid 30px #1C2331;
         border-top: solid 30px transparent;
         border-left: solid 30px transparent;
         border-right: solid 30px transparent;
         }
         #hero1 {
         display: inline-block;
         position:relative;
         background-color:#1C2331;
         height:320px !important;
         width:100% !important;
         }
         #hero2:after {
         content:'';
         display: block;
         position: absolute;
         bottom:100%;
         left: 25%;
         margin-left: -50px;
         width: 0;
         height: 0;
         border-bottom: solid 30px #1C2331;
         border-top: solid 30px transparent;
         border-left: solid 30px transparent;
         border-right: solid 30px transparent;
         }
         #hero2 {
         display: inline-block;
         position:relative;
         background-color:#1C2331;
         height:320px !important;
         width:100% !important;
         }
         #mesg{
         font-size:12px;
         color:white;
         
         
         }
         #logon{
         background-image: url('jr_logow.png');
         background-size: 240px 100px;
         height:100px;
         width:240px;
         }
      
         #third,#second,#first,#four{
         background-position: center;
         }
         .col-md-3:hover{
          cursor:pointer;
         }
             .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 999;
    top: 0;
    overflow:hidden;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 30px;

}
.sidenav iframe{
   padding:5px ;
}
.sidenav input {
    padding: 8px 8px 8px 12px;
    text-decoration: none;
   
    color: #818181;
    display: block;
    top:0;
    transition: 0.3s;

}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}





@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.side{
   width:40px;
   height:60px;
   top:50%;
   border:0;
   border-radius:5px 0px 0px 5px;
   background-color: #FF3300;
   right:0;
   padding-left:6px;
   padding-top:13px;
   z-index:888;
   color:white;
   display:none;
   color :black;
   position: fixed;
}
.sidealt{
   width:25px;
   height:50px;
   top:50%;
   border:0;
   border-radius:5px 0px 0px 5px;
   background-color: #FF3300;
   right:250px;
   padding-left:6px;
   padding-top:16px;
   z-index:1000;
   color:white;
   display:none;
   color :black;
   position: fixed;
}

      </style>
   </head>
   <body  onload="myFunction()" style="background-color:#0d0d0d;">
      <div id="d" class="verticalcenter">
                <center>
                     <div id="logon" /></div>
         
            <div id="loader" ></div>
         
         <br>
         <div id="mesg">
            <b>Your recluse from limited Internet Access<br><br><span style="color:#FD4815;" id="server">One moment please...</span></b><b><br><br><span style="color:#03A9F4;font-size:14px;"><!--<i class="fa fa-dot-circle-o" aria-hidden="true"></i>--> #MrRobot S02_Finale is available.</span><!--<br><br><span style="font-size:12px;color:#fff;">New movies have been uploaded... Enjoy!</span>-->
         </div>
         </div>
      </div>
      <!--Navigation-->
      <nav class="navbar black navbar-fixed-top z-depth-1" role="navigation" id="nv" >
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand waves-effect waves-light" href="#"><img src="jr_logow.png" height="60" width="150"  class="img-responsive"style="float:left;top: -10px;margin-bottom:7px;position:relative;"/></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <form class="navbar-form navbar-right" role="search">
                  <div class="form-group waves-effect waves-light">
                     <input type="text" class="form-control" placeholder="Search" style="display:none;">                   
                  </div>
               </form>
            </div>
         </div>
      </nav>
      <!--/.Navigation-->
      <!-- Carousel -->
      <div id="main-carousel" class="carousel slide carousel-fade carousel-bg" data-interval="false" id="car" style="height:78%;" >
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active">    </li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item active">
               <!--Video-->
               <div class="homepage-hero-module">
                  <video autoplay loop muted class="fillWidth" style="min-width: 100%;opacity:0.4;">
                     <source src="mrr.mp4" type="video/mp4" />
                     Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
               </div>
               <!--/.Video-->
               <!--Caption-->
               <div class="carousel-caption">
                  <div class="verticalcenter">
                     <div class="animated fadeInDown">
                        
                        <h4>#Season_Finale_Part-II</h4>
                        <h5>Watch Mr. Robot S02 EP11 [Part-II]</h5>
                        <a href="redirect_mirror1.php?s=Mr. Robot&sea=S02" target="_blank" class="btn btn-primary btn-etc waves-effect waves-light"><i class="fa fa-play right"></i>Watch now</a>
                     </div>
                  </div>
               </div>
               <!--/.Caption-->
            </div>
            <!-- /.First slide -->
            <!-- Second slide -->
            <div class="item">
               <!--Video-->
               <div class="homepage-hero-module">
                  <video autoplay loop muted class="fillWidth" style="min-width: 100%;opacity:0.4;">
                     <source src="nc.mp4" type="video/mp4" />
                     Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
               </div>
               <!--/.Video-->
               <!--Caption-->
               <div class="carousel-caption">
                  <div class="verticalcenter">
                     <div class="animated fadeInDown">
                        <h4>#There's no money like blow buisness</h4>
                        <h5>Watch Narcos Season 2...</h5>
                        <a href="redirect_video.php?s=Narcos&sea=S02" target="_blank" class="btn btn-primary btn-etc waves-effect waves-light"><i class="fa fa-play right"></i>Watch now</a>
                     </div>
                  </div>
               </div>
               <!--/.Caption-->
            </div>
            <!-- /.Second slide -->
            <!-- Third slide -->
            <div class="item">
               <!--Video-->
               <div class="homepage-hero-module">
                  <video autoplay loop muted class="fillWidth" style="min-width: 100%;opacity:0.4;">
                     <source src="sv.mp4" type="video/mp4" />
                     Your browser does not support the video tag. I suggest you upgrade your browser.
                  </video>
               </div>
               <!--/.Video-->
               <!--Caption-->
               <div class="carousel-caption">
                  <div class="verticalcenter">
                     <div class="animated fadeInDown">
                        <h4>Silicon Valley Season 3 is available</h4>
                        <h5>Click below to watch</h5>
                        
                        <a href="redirect_video.php?s=Silicon Valley&sea=S03" target="_blank" class="btn btn-primary btn-etc waves-effect waves-light"><i class="fa fa-play right"></i>Watch</a>
                     </div>
                  </div>
               </div>
               <!--/.Caption-->
            </div>
            <!-- /.Third slide -->
         </div>
         <!-- /.carousel-inner -->
         <!-- Controls -->
         <a class="left carousel-control new-control" href="#main-carousel" role="button" data-slide="prev">
         <span class="fa fa fa-angle-left waves-effect waves-light"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control new-control" href="#main-carousel" role="button" data-slide="next">
         <span class="fa fa fa-angle-right waves-effect waves-light"></span>
         <span class="sr-only">Previous</span>
         </a>
      </div>
      <!--sidenav-->
      <div id="mySidenav" class="sidenav">
      <center>
  <img src="jr_logow_2.png" height="60" width="150"  class="img-responsive" style="transition:0.3s;"/>
  <hr style="width:30%;">

  <iframe src="chat1.php" width="240" frameborder="0" scrolling="no" style="position:absolute;height:80%;left:5px;"></iframe>
  
</center>
</div>
<div class="side" id="snv" ><i class="fa fa-comments-o fa-2x" aria-hidden="true" style="color:white;"></i></div>
<div class="sidealt" id="snv" ><i class="fa fa-chevron-right fa-lg" aria-hidden="true" style="color:white;"></i></div>
<!--/sidenav-->
      <main class="mdl-layout__content"  id="maic">

         <div class="container" >
                 
         <div class="row">
         <br>
               <h5 style="color:#666666;">Movies</h5>
               </div>
            
               <?php
               $result=mysql_query("SELECT count(*) as total from f_handle");
               $data=mysql_fetch_assoc($result);
               $n=0;
               for($i=0;$i<ceil($data['total']/4);$i++){
                  $query = mysql_query("SELECT * FROM f_handle LIMIT $n,4");
                  ?>
                  <div class="row" id="sdhsjf">
                  <?php
                  $k =0;
                while(($row = mysql_fetch_array($query)) && $k<4){

                  ?>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="<?php echo md5($row[0]);?>">
                  <figure>

                     <img src="clip/<?php echo $row[6];?>"  class="img-responsive" id="<?php echo md5($row[0].$row[6]);?>" style="height:250px;width:250px;"/>
                     <br>
                     <figcaption style="color:white;" id="dsnewrerfkaj"><?php echo $row[0]?></figcaption>
                  </figure>
               </div>
               <?php }
               $n = $n+4;
               ?>
               </div>
               <?php }?>
             </div>
		<!--<div class="row" id="sdhsjf">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/ss.jpg"  class="img-responsive" id="cwererv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnewrerfkaj">Suicide Squad</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="goth">
                  <figure>
                     <img src="clip/mm.jpg" class="img-responsive" id="dfraervfd"/>
                     <br>
                     <figcaption style="color:white;" id="dsafrrtevdf">Mad Max Fury Road</figcaption>
                  </figure>
               </div>
               <!--<div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/ma.jpeg"  class="img-responsive" id="sdvdthgsa"/>
                     <br>
                     <figcaption style="color:white;" id="erwfjge">The Martian</figcaption>
                  </figure>
               </div>-->
              <!-- <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/ru.jpg"  class="img-responsive" id="sdafgjgygkhsav"/>
                     <br>
                     <figcaption style="color:white;" id="veiytiytityrv">Rush</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="hoc">
                  <figure>
                     <img src="clip/am.jpg"  class="img-responsive" id="sdafgjdjjgygrfdkhsav"/>
                     <br>
                     <figcaption style="color:white;" id="veiytiytndjityrv">American History X</figcaption>
                  </figure>
               </div>
            </div>
               <div class="row" id="sdhhbjkhsjf">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/ud.jpg"  class="img-responsive" id="cwehbhjrerv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnewrerfbhjkaj">Udaan</figcaption>
                  </figure>
               </div>
              
            </div>  -->         
            <!--hidden-->
            <div class="row" style="display:none" id="her">
               <div class="col-md-3" style="height:320px;  background-size:auto 320px;top:20px;padding:0;" id="third">
               </div>
               <div class="col-md-9">
                  <br/>
                  <div id="hero" style="margin-left: -12px;">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 style="color:white;" id="wld"></h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-9"  >
                              <p  id="pxr" style="color:white;"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!---/hidden-->
            <!--hidden-->
            <div class="row" style="display:none" id="hir">
               <div class="col-md-3" style="height:320px;  background-size:auto 320px;top:20px;padding:0;" id="four">
               </div>
               <div class="col-md-9">
                  <br/>
                  <div id="hero1" style="margin-left: -12px;">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 style="color:white;" id="pul"></h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-9"  >
                              <p  id="fic" style="color:white;"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!---/hidden-->
            <!--hidden-->
            <div class="row" style="display:none" id="hor">
               <div class="col-md-9">
                  <br/>
                  <div id="hero" style="margin-left: 8px;">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 style="color:white;" id="inc"></h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-9"  >
                              <p  id="mpl" style="color:white;"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" style="height:320px;  background-size:auto 320px;top:20px;padding:0;" id="second">
               </div>
            </div>
            <!---/hidden-->
            <!--hidden-->
            <div class="row" style="display:none" id="hpr">
               <div class="col-md-9">
                  <br/>
                  <div id="hero2" style="margin-left: 8px;">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 style="color:white;" id="n"></h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-9"  >
                              <p  id="pq" style="color:white;"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br/>
               <div class="col-md-3" style="height:320px;  background-size:auto 320px;top:20px;padding:0;" id="first">
               </div>
            </div>
            <!---/hidden-->
         </div>
         
         <footer class="page-footer   rgba-black-light">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <p class="grey-text text-lighten-6" style="font-size: 15px;"><b>&copy 2016 JRadioLAN.</b><img src="jr_logog.png" class="img-responsive" height="50" width="120" style="float:right;"/></p>
                     <p class="grey-text text-lighten-6" style="font-size: 15px;">Site designed & hosted by <b style="font-size:16px;color:white;">3xpl0its.</b></p>
                  </div>
               </div>
            </div>
         </footer>
      </main>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script>
         var myVar;
         
         
         
         function myFunction() {
         myVar = setTimeout(google, 2000);
         }
          function google() {
            document.getElementById("server").innerHTML="Server setting fine...";
            document.getElementById("server").style.color="#76FF03";
            myVar1= setTimeout(showPage, 2000);
          }

         function showPage() {
         document.getElementById("loader").style.display = "none";
             document.getElementById("logon").style.display = "none";
                      document.getElementById("d").style.display = "none";

         document.getElementById("mesg").style.display = "none";
         document.getElementById("maic").style.display = "block";
         document.getElementById("snv").style.display = "block";
         document.getElementById("main-carousel").style.display = "block";
         document.getElementById("nv").style.display = "block";
         
         }
         
            

         $(document).ready(function(){
          $(".side").click(function(){
               $("#mySidenav").css("width","250px");
               $(".sidealt").fadeIn(500);

            });
            $(".sidealt").click(function(){
               $("#mySidenav").css("width","0");
               $(".sidealt").fadeOut(200);
            });
         $("#cl,#goth,#pb,#frnds,#dxtr,#tbts").click(function(){

             var id = $(this).parent().attr("id");
             var fig = $(this).find("figcaption");
              var attrID1 = fig.attr("id"); 
              var txt=$("#"+attrID1).text();  
             $("#hor").fadeOut(0);
             $("#her").fadeOut(50);
             $("#hpr").fadeOut(50);
             $("#hir").fadeOut(50);
             $("#hor").appendTo("#"+id);
             $("#hor").fadeToggle(500);
               $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 2000);
             

         
                var img = $(this).find("img");
                var attrID = img.first().attr("id");
                var img_src = $("#"+attrID).attr('src');
                    $("#second").css("background-image","url("+img_src+")") ; 
                    $("#second").css("background-repeat","no-repeat") ; 
                    $("#inc").text(txt);
         
                 $.get('text/'+txt+'.txt', function(data) {
                     $("#mpl").html(data);
                 });
             });
         
          $("#clp,#ncr,#svl,#pb1,#frnd,#triu").click(function(){
              var id = $(this).parent().attr("id");
              var fig = $(this).find("figcaption");
              var attrID1 = fig.attr("id");  
              var txt=$("#"+attrID1).text();
             
                  $("#her").fadeOut(0);
                 $("#hor").fadeOut(50);
                 $("#hpr").fadeOut(50);
                 $("#hir").fadeOut(50);
                 $("#her").appendTo("#"+id);
                 $("#her").fadeToggle(500);
                  $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 2000);   
                 var img = $(this).find("img");
                 var attrID = img.first().attr("id");
                 var img_src = $("#"+attrID).attr('src');
                     $("#third").css("background-image","url("+img_src+")") ; 
                     $("#third").css("background-repeat","no-repeat") ; 
                     $("#wld").text(txt);
                    
                    $.get('text/'+txt+'.txt', function(data) {
                          $("#pxr").html(data);
                     });
             });
         
           $("#bob,#hoc,#mm,#suit,#tbt").click(function(){
              var id = $(this).parent().attr("id");
              var fig = $(this).find("figcaption");
              var attrID1 = fig.attr("id");  
              var txt=$("#"+attrID1).text();
               
                 $("#hir").fadeOut(0);
                 $("#hor").fadeOut(50);
                 $("#her").fadeOut(50);
                 $("#hpr").fadeOut(50);
                 $("#hir").appendTo("#"+id);
                 $("#hir").fadeToggle(500);
                $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 2000);
                 var img = $(this).find("img");
                 var attrID = img.first().attr("id");
                 var img_src = $("#"+attrID).attr('src');
                     $("#four").css("background-image","url("+img_src+")") ;     
                     $("#four").css("background-repeat","no-repeat") ; 
                     $("#pul").text(txt);
                    
                    $.get('text/'+txt+'.txt', function(data) {
                          $("#fic").html(data);
                     });
             });
         
           $("#got,#bba,#sher,#far,#him,#show,#dm1,#dm2,#up1,#fng").click(function(){
              var id = $(this).parent().attr("id");   
              var fig = $(this).find("figcaption");
              var attrID1 = fig.attr("id");  
              var txt=$("#"+attrID1).text();    
         
             $("#hpr").fadeOut(0);
             $("#hor").fadeOut(50);
             $("#her").fadeOut(50);
             $("#hir").fadeOut(50);
             $("#hpr").appendTo("#"+id);
             $("#hpr").fadeToggle(500);
          $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 2000);
              var img = $(this).find("img");
              var attrID = img.first().attr("id");
              var img_src = $("#"+attrID).attr('src');
               $("#first").css("background-image","url("+img_src+")") ; 
               $("#first").css("background-repeat","no-repeat") ; 
               $("#n").text(txt);
         
                 $.get('text/'+txt+'.txt', function(data) {
                     $("#pq").html(data);
                 });
             });
         
         });
         
      </script>
      <!-- Material Design Bootstrap -->
      <script type="text/javascript" src="js/mdb.js"></script>
   </body>
</html>