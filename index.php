<?php 
include('header.html')


 ?>
 <!DOCTYPE html>
 <html>
 <head>
<style type="text/css">
   body{
   	background-image: url(tech2.jpg);
   	background-size: cover;
   }
   .select{
   	text-align: center;
   	color: white;
   }
  a{
       text-decoration-line: none;
       color:white;
  }
  a:hover{
  	color: red;
  }

li{
	list-style: none;
}

 
</style>
 </head>
 <body>
 	<br><br>
		 	<div class="select">
		 		<li><a href="about.php">About Makzedcodes</a></li>
		 		<li><a href="form.html">Add to the database</a></li>
		 		<li><a href="search.php">Search from the database</a></li>
		 	</div>
 	<br><br>
 <?php include('footer.html') ?>
 </body>
 </html>