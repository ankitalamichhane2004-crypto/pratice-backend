<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>The Baking Academy</title>
    <link rel="shortcut icon" href="images/icon.ico">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@200;300;400;600&family=Pacifico&family=Signika+Negative:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* HEADER */
        header{
          position: fixed;
          top: 2rem;
          width: 100%;
          z-index: 9999;
          transition: 0.5s;
        }

        .topnav {
          overflow: hidden;
          background-color: #fff;
          width: 80%;
          height: 80px;
          margin: auto; 
          box-shadow: 0px 6px 16px -6px rgba(1,1,1,0.5);
          transition: 0.5s;
          font-family: 'Cairo', sans-serif;
        }

        .topnav a {
          float: left;
          display: block;
          color: #8c6239;
          text-align: center;
          padding: 24px 16px;
          margin: auto 1rem;
          text-decoration: none;
          font-size: 17px;
          position: relative;
        }

        .logo{
          width: 103px;
          height: 79px;
          position: absolute;
          top: 0.2rem;
          border-radius: 0px;
        }

        .topnav .active{
          color: #236b9a;
        }

        .topnav .icon {
          display: none;
        }

        @media screen and (max-width: 920px) {
          .logo{
            height:40px;
            width:100px;
            position: static;
          }
          .topnav{
            height:auto;
          }
          .topnav a {
            padding: 14px 16px;
          }
          .topnav a:not(:first-child){
            display: none;
          }
          .topnav a.icon {
            float: right;
            display: block;
          }
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {position: absolute; right: 0; top: 0;}
          .topnav.responsive a {float: none; display: block; text-align: left;}
        }

        /* FOOTER */
        .footer{
          background:#000;
          padding:30px 0px;
          font-family: 'Play', sans-serif;
          text-align:center;
          background-image:url("https://i.ibb.co/7Nwg5dK/footer.jpg");
          background-size:100% 100%;
        }

        .footer .row{
          width:100%;
          margin:1% 0%;
          padding:0.6% 0%;
          color:gray;
          font-size:0.8em;
        }

        .footer .row a{
          text-decoration:none;
          color:gray;
          transition:0.5s;
        }

        .footer .row a:hover{
          color:#fff;
        }

        .footer .row ul{
          width:100%;
        }

        .footer .row ul li{
          display:inline-block;
          margin:0px 30px;
        }

        .footer .row a i{
          font-size:2em;
          margin:0% 1%;
        }

        @media (max-width:720px){
          .footer{
            text-align:left;
            padding:5%;
          }
          .footer .row ul li{
            display:block;
            margin:10px 0px;
            text-align:left;
          }
          .footer .row a i{
            margin:0% 3%;
          }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header id="header">
  <div class="topnav" id="myTopnav">
    <a href="#"><img class="logo" src="./images/The baking academy Logo-01.png" alt="Logo"></a>
    <a id="active"></a>
    <a href="/" class="active">HOME</a>
    <a href="/feedback">FEEDBACK</a>
    <a href="/gallery">GALLERY</a>
    <a href="/blog">BLOG</a>
    <a href="/contact">CONTACT</a>
    <a href="#">ABOUT</a>
    <a href="#" style="float:right;padding: 24px 2px;">
      <i class="fa fa-search" class="openBtn" onclick="openSearch()"></i>
    </a>
    <a href="#" style="float:right;padding: 24px 2px;">
      <i class="fa fa-user-circle-o"></i>
    </a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
  </div>
</header>

<!-- FOOTER -->
<footer>
  <div class="footer">
    <div class="row">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
    </div>

    <div class="row">
      <ul>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Career</a></li>
      </ul>
    </div>

    <div class="row">
      Copyright © 2021 name - All rights reserved
    </div>
  </div>
</footer>

<script>
function NavBar() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>

