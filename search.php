<?php 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 		body{
 			background-image: url(find.jpg) ;
 			background-size: cover;
 			color: white;
 		}
 		.form{
 			margin-top: 50px;
 		margin-left: 200px;
 		}


 		input{
 			position: absolute;
 			border-radius: 20px;
 			width: 300px;
 			height: 30px;
 		}
 	</style>
 </head>
 <body>
		 <div class="form">
		 	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		 		<label>Enter the email</label>
		 		<input type="text" name="mail" autocomplete="off">
		 		<br><br>
		 		<button name="search" value="search">Search</button>
		 	</form>
		 </div>
 </body>
 </html>