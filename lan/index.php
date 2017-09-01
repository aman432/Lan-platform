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
               <h5 style="color:#666666;">New Movies</h5>
               </div>
      <div class="row" id="sdhsmnmjf">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/pk.jpg"  class="img-responsive" id="cweremnmrv"/>
                     <br>
                     <figcaption style="color:white;" id="dhgsnewrerfkaj">Pink</figcaption>
                  </figure>
               </div>
               </div>
           <div class="row">
               <br>
               <h5 style="color:#666666;">Recently Added</h5>
                           </div>
                          <div class="row" id="ssdaf">
                          <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/tw.jpg"  class="img-responsive" id="cmsndbcdcdnv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnjaskjfkabvscsdcenbj">The Wire</figcaption>
                  </figure>
               </div>
                           <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="goth">
                  <figure>
                     <img src="clip/saul.jpg"  class="img-responsive" id="cmsndbnv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnjaskjfkabvnbj">Better Call Saul</figcaption>
                  </figure>
               </div>
                          <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/hb.jpg"  class="img-responsive" id="cmsndvvvvbnv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnjaskjfkabvvvnbj">Hannibal</figcaption>
                  </figure>
               </div>
                         
             <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="hoc">
                  <figure>
                     <img src="clip/vk.jpg"  class="img-responsive" id="cmsndfgbnhjjv"/>
                     <br>
                     <figcaption style="color:white;" id="dsytnjaskjfkabvnbj">Vikings</figcaption>
                  </figure>
               </div>
               
               </div>
                 <div class="row" id="sscxvdaf">
                          <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/mr.jpg"  class="img-responsive" id="cbcdcdnv"/>
                     <br>
                     <figcaption style="color:white;" id="dsncenbj">Mr. Robot S02</figcaption>
                  </figure>
               </div>
                           <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="goth">
                  <figure>
                     <img src="clip/bbt.jpg"  class="img-responsive" id="cndbnv"/>
                     <br>
                     <figcaption style="color:white;" id="dsbj">The Big Bang Theory S10 - E01</figcaption>
                  </figure>
               </div>
                          <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/nc.jpg"  class="img-responsive" id="cmmv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnvvvnbj">Narcos S02</figcaption>
                  </figure>
               </div>
                         
             <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;visibility: hidden;" id="m">
                  <figure>
                     <img src="clip/tg.jpg"  class="img-responsive" id="asdsakdsfggdf"/>
                     <br>
                     <figcaption style="color:white;" id="hggfsdfhdnef">Top Gear</figcaption>
                  </figure>
               </div>
               
               </div>
         <div class="row">
         <br>
               <h5 style="color:#666666;">Movies</h5>
               </div>
		<div class="row" id="sdhsjf">
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
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
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
              
            </div>           
                         

          
            <div class="row">
               <br>
               <h5 style="color:#666666;">Featured</h5>
            </div>
            <div class="row" id="sf">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bba">
                  <figure>
                     <img src="clip/bb.jpeg"  class="img-responsive" id="cv"/>
                     <br>
                     <figcaption style="color:white;" id="dsnfkaj">Breaking Bad</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="goth">
                  <figure>
                     <img src="clip/got.jpg" class="img-responsive" id="dfvfd"/>
                     <br>
                     <figcaption style="color:white;" id="dsafvdf">Game of Thrones S06</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/mr.jpg"  class="img-responsive" id="sdvsa"/>
                     <br>
                     <figcaption style="color:white;" id="erwfe">Mr. Robot</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="hoc">
                  <figure>
                     <img src="clip/hocr.jpg"  class="img-responsive" id="sdafsav"/>
                     <br>
                     <figcaption style="color:white;" id="verv">House of Cards</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row" id="afda">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="sher">
                  <figure>
                     <img src="clip/sherlock.jpg"  class="img-responsive" id="sdafa"/>
                     <br>
                     <figcaption style="color:white;" id="reface">Sherlock</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="pb">
                  <figure>
                     <img src="clip/ffl.jpg"  class="img-responsive" id="ccfc"/>
                     <br>
                     <figcaption style="color:white;" id="cerce">Firefly</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="ncr">
                  <figure>
                     <img src="clip/nc.jpg"  class="img-responsive" id="dscf"/>
                     <br>
                     <figcaption style="color:white;" id="fefcwsea">Narcos</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="mm">
                  <figure>
                     <img src="clip/sv.jpg"  class="img-responsive" id="sdc"/>
                     <br>
                     <figcaption style="color:white;" id="hfhfhf">Silicon Valley</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row" id="afhghdfecda">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="fng">
                  <figure>
                     <img src="clip/fng.png"  class="img-responsive" id="sdhjafa"/>
                     <br>
                     <figcaption style="color:white;" id="refahgce">Freaks & Geeks</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="tbts">
                  <figure>
                     <img src="clip/bbt.jpg"  class="img-responsive" id="sdaesesegfa"/>
                     <br>
                     <figcaption style="color:white;" id="refanbmnce">The Big Bang Theory S09</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnd">
                  <figure>
                     <img src="clip/tr.jpg"  class="img-responsive" id="sdvjhjsa"/>
                     <br>
                     <figcaption style="color:white;" id="erjjjwfe">True Detective</figcaption>
                  </figure>
               </div>
                <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;visibility: hidden;" id="m">
                  <figure>
                     <img src="clip/tg.jpg"  class="img-responsive" id="asdsakggdf"/>
                     <br>
                     <figcaption style="color:white;" id="hggfhdnef">Top Gear</figcaption>
                  </figure>
               </div>
                </div>
            <div class="row" >
               <h5 style="color:#666666;">Recommended</h5>
            </div>
            <div class="row" id="puy">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="got">
                  <figure>
                     <img src="clip/hnc.jpg"  class="img-responsive" id="sa"/>
                     <br>
                     <figcaption style="color:white;" id="ppqss">Halt and Catch Fire</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="cl">
                  <figure>
                     <img src="clip/pr.jpg"  class="img-responsive" id="uyi"/>
                     <br>
                     <figcaption style="color:white;" id="onyc">Preacher</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="clp"  >
                  <figure>
                     <img src="clip/da.jpg"  class="img-responsive"  id="fdj"/>
                     <br>
                     <figcaption style="color:white;" id="mrr">Downton Abbey</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="bob">
                  <figure>
                     <img src="clip/bob.jpg"  class="img-responsive" id="wdw"/>
                     <br>
                     <figcaption style="color:white;" id="olaki">Band of Brothers</figcaption>
                  </figure>
               </div>
            </div>
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
            <div class="row" id="dsaf">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="far">
                  <figure>
                     <img src="clip/fr.png"  class="img-responsive" id="affr"/>
                     <br>
                     <figcaption style="color:white;" id="hjhjgfcv">Fargo</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row">
               <h5 style="color:#666666;">Comedies</h5>
            </div>
            <div class="row" id="lgb">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="him">
                  <figure>
                     <img src="clip/himym.jpeg"  class="img-responsive" id="sdflaf"/>
                     <br>
                     <figcaption style="color:white;" id="mzlapw">How I Met Your Mother</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnds">
                  <figure>
                     <img src="clip/frn.jpg"  class="img-responsive" id="csc"/>
                     <br>
                     <figcaption style="color:white;" id="hybks">Friends</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="svl">
                  <figure>
                     <img src="clip/sv.jpg"  class="img-responsive" id="sdcd"/>
                     <br>
                     <figcaption style="color:white;" id="asck">Silicon Valley</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="tbt">
                  <figure>
                     <img src="clip/bbt.jpg"  class="img-responsive" id="dfcdv"/>
                     <br>
                     <figcaption style="color:white;" id="ghujki">The Big Bang Theory</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row" id="sdfafa">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="show">
                  <figure>
                     <img src="clip/fr.png"  class="img-responsive" id="sdafcs"/>
                     <br>
                     <figcaption style="color:white;" id="lapqmz">Fargo</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="frnds">
                  <figure>
                     <img src="clip/fng.png"  class="img-responsive" id="sdalllfcs"/>
                     <br>
                     <figcaption style="color:white;" id="lapqmmmuigz">Freaks & Geeks</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row" id="llll">
               <h5 style="color:#666666;">TV Drama's </h5>
            </div>
            <div class="row" id="jsas">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="dm1">
                  <figure>
                     <img src="clip/bb.jpeg"  class="img-responsive" id="sdacsa"/>
                     <br>
                     <figcaption style="color:white;" id="ksjdhf">Breaking Bad</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="dxtr">
                  <figure>
                     <img src="clip/got.jpg"  class="img-responsive" id="km"/>
                     <br>
                     <figcaption style="color:white;" id="pqoxm">Game of Thrones S06</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="pb1">
                  <figure>
                     <img src="clip/mr.jpg"  class="img-responsive" id="mkm"/>
                     <br>
                     <figcaption style="color:white;" id="skalo">Mr. Robot</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="suit">
                  <figure>
                     <img src="clip/st.jpg"  class="img-responsive" id="ffv"/>
                     <br>
                     <figcaption style="color:white;" id="zmxnuw">Suits</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row" id="dsfdfsa">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="dm2">
                  <figure>
                     <img src="clip/tr.jpg"  class="img-responsive" id="savfs"/>
                     <br>
                     <figcaption style="color:white;" id="pqlsdla">True Detective</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="dxtr">
                  <figure>
                     <img src="clip/sherlock.jpg"  class="img-responsive" id="saxxvfffs"/>
                     <br>
                     <figcaption style="color:white;" id="pqlfxzxdsdla">Sherlock</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="pb1">
                  <figure>
                     <img src="clip/hocr.jpg"  class="img-responsive" id="savsgwddsfs"/>
                     <br>
                     <figcaption style="color:white;" id="pqlsdgsdcsdla">House of Cards</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="suit">
                  <figure>
                     <img src="clip/nc.jpg"  class="img-responsive" id="saswvsgdsfs"/>
                     <br>
                     <figcaption style="color:white;" id="pqlsdeewegsdla">Narcos</figcaption>
                  </figure>
               </div>
            </div>
            <div class="row">
               <h5 style="color:#666666;">Miscelleneous</h5>
            </div>
            <div class="row" id="fdavsfdv">
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="up1">
                  <figure>
                     <img src="clip/cs.jpg"  class="img-responsive" id="asdsdf"/>
                     <br>
                     <figcaption style="color:white;" id="hfhf">Cosmos</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="dxtr">
                  <figure>
                     <img src="clip/mtv.png"  class="img-responsive" id="asdslkjhakdf"/>
                     <br>
                     <figcaption style="color:white;" id="hfhdnyuief">Bring on the Night</figcaption>
                  </figure>
               </div>
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;" id="pb1">
                  <figure>
                     <img src="clip/tg.jpg"  class="img-responsive" id="asdsakdf"/>
                     <br>
                     <figcaption style="color:white;" id="hfhdnef">Top Gear</figcaption>
                  </figure>
               </div>
               
               <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;visibility: hidden;" id="m">
                  <figure>
                     <img src="clip/tg.jpg"  class="img-responsive" id="asdsakggdf"/>
                     <br>
                     <figcaption style="color:white;" id="hggfhdnef">Top Gear</figcaption>
                  </figure>
               </div>
               </div>
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