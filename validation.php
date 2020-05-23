<?php 

include('connect.php');
$errors = array('fName'=>'', 'lName'=>'', 'email'=>'','school'=>'','major'=>'','minor'=>'');

if(isset($_POST['button'])):

//checking if the first name has been entered
if(empty($_POST['fName'])){
$errors['fName'] = 'the first name is required';
}else{
	$fName = $_POST['fName'];
}

//checking if the last name has been entered
	if(empty($_POST['lName'])){
$errors['lName'] = 'the last name is required';
}else{
	$lName = $_POST['lName'];
}

//checking if the email has been entered

if(empty($_POST['email'])){
$errors['email'] = 'the email is required';
}else{
	$email = $_POST['email'];
}

//checking if the school has been entered

if(empty($_POST['school'])){
$errors['school'] = 'the school is required';
}else{
	$sch = $_POST['school'];
}

//checking if the major course has been entered

if(empty($_POST['major'])){
$errors['major'] = 'the major course is required';
}else{
	$major = $_POST['major'];
}

//checking if the minor course has been entered


if(empty($_POST['minor'])){
$errors['minor'] = 'the manor course is required';
}else{
	$minor = $_POST['minor'];
}





endif

 ?>
 <!DOCTYPE html>
 <html>
 <head>
		<style type="text/css">
			.errors{
				position: absolute;
				color: white;
				border: solid;
				border-radius: 15px;
				border-color: red;

			}
		</style>
 </head>
 <body>
 <?php 	include('header.html'); ?> 

 <div class="errors">
		 		<small>
		 			<?php 
                         if(array_filter($errors)){

                         echo $errors['fName'].'<br>';
                        echo $errors['lName'].'<br>';
                         echo $errors['email'].'<br>';
                         echo $errors['school'].'<br>';
                         echo $errors['major'].'<br>';
                         echo $errors['minor'].'<br>';

                         }else{
                                 
                                 $fName = mysqli_real_escape_string($connect, $fName);
                                 $lName = mysqli_real_escape_string($connect, $lName);
                                 $email = mysqli_real_escape_string($connect, $email);
                                 $sch = mysqli_real_escape_string($connect, $sch);
                                 $major = mysqli_real_escape_string($connect, $major);
                                 $minor = mysqli_real_escape_string($connect, $minor);

                                 $sql = "INSERT INTO requirements(firstName,lastName,email,school,major,minor) VALUES('$fName','$lName','$email','$sch','$major','$minor')";

                                mysqli_query($connect, $sql);

                                mysqli_close($connect);

                                header('Location:index.php');

                         }
		 			 ?>
		 		</small>
		 	</div>
 	<?php include('form.html'); ?>

		 	
 	<br><br>
 <?php include('footer.html'); ?>
 </body>
 </html>