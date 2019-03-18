<?php include "index.html"; ?>

<html>
<head>
	<title></title>
</head>
<style>
* {
  box-sizing: border-box;
}
 body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 .btn-lg.round {
  border-radius: 30px;

}
#bottom_div_left img
{
	width: 170px;
	height: 180px;
	border-radius: 100px;  
	
}
</style>
<body>
	<header style="width: 100%; height: 50px; font-size: 22px;"><center><h2>User <b>Profile</b></h2></center></header>
	<div style="width: 100%; height: 600px; background-color:#f5f5f5; padding-top: 20px;"><br>
<div class="row">
  <div class="column" style="padding-left: 250px;">
    
    NAME : <br><br>
    EMAIL : <br><br>
    GENDER :<br><br>
    PHONE NUMBER :<br><br>
    MESSAGE :<br><br><br>
    VIEW FILE :<br><br>

  </div>
  <div class="column">    
  </div>
  <div class="column">
  	<div id="bottom_div_left">
         
  	<img src="sonu.jpg">

   
</div>
  </div>
</div>
</body>
</html>