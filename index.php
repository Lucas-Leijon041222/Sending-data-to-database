<!DOCTYPE html>
<!-- Lucas Leijon data 3  2024 !-->
<html>
  <head>
    <title>Quito Help Forum</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quito-forum.css">
    <style>
       /* this makes a dropdown so its easyer to see whats going on */
       .dropdown {
        display: block;
        position: relative;
      }

      .dropbtn {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

     

      .dropdown:hover .dropdown-content {
        display: block;
      }





      .dropdown-content a {
      color: 333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
       
      }



    body {margin: 0;}
    /* this is the topnav its there as a way to redirect you to differand websites depending on your need */
    ul.topnav {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: auto;
      background-color: #333;
      border-radius: 25px 25px 25px 25px;
    }

    ul.topnav li {float: left;}

    ul.topnav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    ul.topnav li a:hover:not(.active) {background-color: #111;}

    ul.topnav li a.active {background-color: #04AA6D;}

    ul.topnav li.right {float: right;}

    @media screen and (max-width: 600px) {
      ul.topnav li.right, 
      ul.topnav li {float: none;}
    }
    /* a class ment to center everything that is in that class in the center of the screen */ 
    .center {
      margin: auto;
      width: 50%;

    }

    /* this class is here to ad the animations in the start of the page when everything moves to there locations */
    div {
      width: 100px;
      height: 100px;
      background-color: 333;
      position: relative;
      animation-name: example;
      animation-duration: 2s;
      border-radius: 50px 50px 50px 50px;
    }
    /* this is the an addon to the div class above it makes it so that the movment happens in sections and not instantly. its set up in % it has 4 dif positions and it moves between them flawlessly*/
    @keyframes example {
      0%   {background-color:333; left:500px; top:500px;}
      25%  {background-color:333; left:300px; top:300px;}
      50%  {background-color:333; left:200px; top:200px;}
      75%  {background-color:333; left:100px; top:200px;}
      100% {background-color:333; left:0px; top:0px;}
    }




    </style>
  </head>
  <body>

    <!-- this is the whole web sites code and the code for the drop down as well !-->
    <ul class="topnav">
      <div class="center">
        <h1 style="color:white;">Welcome To Quito Support Center</h1>
        <div class="dropdown">
        <a href="#" class="dropbtn">Services</a>
        <div class="dropdown-content">
          <a href="web-development.php">Web Development</a>
          <a href="server-management.php">Server Management Assistance</a>
          <a href="general-questions.php">General Questions</a>
        </div>
    </div>
      </div>
      <
    
    </ul>



    </body>
</html>