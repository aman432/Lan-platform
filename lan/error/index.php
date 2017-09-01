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
         #loader1 {
         
         width: 50px;
         height: 50px;
      }
         #loader {
         
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
         #nv{
            display:none;

         }
         #mesg{
         font-size:12px;
         color:white;
         font-family: Verdana;
         
         }
         #logon{
         background-image: url('jr_logow.png');
         background-size: 240px 100px;
         height:100px;
         width:240px;
         }
         .overlay{
            height:100%;
            width:100%;
            position: absolute;
            background-image:url('dots.png');
            top:0;
            display:none;
         }
         body{
            background-size: cover;
            opacity:.8;
         }
         </style>

          </head>
          <body  onload="myFunction()" style="background-color:#0d0d0d;" id="bg">
      <div id="d" class="verticalcenter">
                <center>
                     <div id="logon" /></div>
         
            <div id="loader" ><i class="fa fa-wrench fa-4x"  id="wrenc"style="display:none;color:white;"></i></div>
         
         <br><br>
         <div id="mesg">
            <b><span id="text">Your recluse from limited Internet Access</span><br><br><span style="color:#FD4815;"" id="server">One moment please...</span></b></center>
         </div>
      </div>
     
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script>
      function myFunction() {
         myVar = setTimeout(google, 3000);
         }
          function google() {
            document.getElementById("server").innerHTML="<i class='fa fa-thumbs-down fa-lg' aria-hidden='true'></i> Server is down";
            document.getElementById("server").style.color="#FF3D00";
            document.getElementById("server").style.fontSize="15px";
            document.getElementById("wrenc").style.display="block";
            document.getElementById("text").innerHTML="Maintenance Break. Please try after sometime...";
            document.getElementById("loader").setAttribute("id", "loader1");
          }
           
          </script>
          </body>