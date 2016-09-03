<?php
	session_start();
	//require_once('author.php');

	include("db_connection.php"); 

	if(isset($_POST['btnsubmit'])){
		$name = $_POST["name"];
		$id = $_POST["person_id"];
		$email = $_POST["phone"];
		$phone = $_POST["email"];
		$password = $_POST["password"];
		$bday = $_POST["birth"];
		$country = $_POST["country"];
		$gender = $_POST["gender"];
		//$term = $_POST["terms"];
		
		$query = "INSERT INTO registration (fullname, per_id, email, phone, password, bdate,country,gender) VALUES ('{$name}','{$id}','{$phone}','{$email}','{$password}','{$bday}','{$country}','{$gender}')";


		// Perform queries 

		$per = mysqli_query($link, $query);
		if(!$per){
			mysqli_close($link);
			echo $query;
			die("\nInsert Failed");	
		}else{
			mysqli_close($link);
			echo ("Insert Successfully.");
		}
	}

?>

<?php include("header.php"); ?>

<div id="mainpage" class="normalpage">
<div id="left" class="widepage">
<div class="post">


	<form class="form-horizontal" role="form" method="POST" action="" >
	<div class="formstyle">
		<h2>Registration Form</h2>
		<div class="form-group">
			<label for="firstName" class="col-sm-3 control-label">Full Name</label>
			<div class="col-sm-9">
				<input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control text_field" autofocus required>
			</div>
		</div>
		<div class="form-group">
			<label for="idd" class="col-sm-3 control-label">ID</label>
			<div class="col-sm-9">
				<input type="id" id="idd" name="person_id" placeholder="Your ID" class="form-control text_field">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="email" id="email" name="email" placeholder="Email" class="form-control text_field" required>
			</div>
		</div>
		<div class="form-group">
			<label for="phone" class="col-sm-3 control-label">Phone</label>
			<div class="col-sm-9">
				<input type="phone" id="phone" name="phone" placeholder="Phone Number" class="form-control text_field">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="password" name="password" id="password" placeholder="Password" class="form-control text_field" required>
			</div>
		</div>
		<div class="form-group">
			<label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
			<div class="col-sm-9">
				<input type="date" name="birth" id="birthDate" class="form-control text_field">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="col-sm-3 control-label">Country</label>
			<div class="col-sm-9">
				<select id="country" name="country" class="form-control text_field">
					<option value=""></option>
					<option value="Afghanistan">Afghanistan</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Bahamas">Bahamas</option>
					<option value="Cambodia">Cambodia</option>
					<option value="Denmark">Denmark</option>
					<option value="Ecuador">Ecuador</option>
					<option value="Fiji">Fiji</option>
					<option value="Gabon">Gabon</option>
					<option value="Haiti">Haiti</option>
				</select>
			</div>
		</div> <!-- /.form-group -->
		<div class="form-group">
			<label class="control-label col-sm-3">Gender</label>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="gender" id="femaleRadio" value="Female">Female
						</label>
					</div>
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="gender" id="maleRadio" value="Male">Male
						</label>
					</div>
					<div class="col-sm-4">
						<label class="radio-inline">
							<input type="radio" name="gender" id="uncknownRadio" value="Unknown">Unknown
						</label>
					</div>
				</div>
			</div>
		</div> <!-- /.form-group -->
		<!--div class="form-group">
			<label class="control-label col-sm-3">Meal Preference</label>
			<div class="col-sm-9">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="lowcal" id="calorieCheckbox" value="Low calorie">Low calorie
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="lowsalt" id="saltCheckbox" value="Low salt">Low salt
					</label>
				</div>
			</div>
		</div--> <!-- /.form-group -->
<!-- 		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<div class="checkbox">
					<label>
						<input name="terms" type="checkbox">I accept <a href="#">terms</a>
					</label>
				</div>
			</div>
		</div> <!-- /.form-group -->
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" name="btnsubmit" class="submitbutton btn btn-primary btn-block">Register</button>
			</div>
		</div>
		</div>
	</form> <!-- /form -->

</div>
<div class="clear"></div>
</div>

<?php include("footer.php");?>

<?php
	//mysqli_close($link);
?>
