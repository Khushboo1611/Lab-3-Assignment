<?php
$firstName = $lastName =  $email = $password = $con_password = "";
if(isset($_POST['f_Name'])){


  /************ Variables ***************/
	$firstName = $_POST['f_Name'];
	$lastName = $_POST['l_Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$c_password = $_POST['con_password'];
/*********** Validation*****************/
	// First Name //
		echo $firstName;
		if($firstName == "")
		{
			$firstNameErr="Please enter your first Name";
		}
	// Last Name //
		echo $lastName;
		if($lastName== ""){
			$lastNameErr="please enter your last name";
		}
	// E-mail	
		echo $email;
			if($email == ""){
			$emailerr = "Please enter email";
		}
			elseif (!filter_input(INPUT_POST, 'email',
			FILTER_VALIDATE_EMAIL)){
			$emailerr = "Please enter valid email";
		}
		else {
        $emailerr ="";
		}
	// Password <!-- Pattern from your code-->
		$pattern = "/[a-zA-Z0-9]{3,8}/";
		if($password == ""){
			$passwordERR="Please enter password";
		}
		elseif(!preg_match($pattern, $password)){
			echo "please enter password with letter and numbers";
		}	
		else {
        echo "Valid password";
		}
	// confirm passowrd
		echo $c_password;
		if($c_password == "")
		{
			$c_passwordErr ="you must enter a password";
		}
		
	}
?>
<!-- content Starts here-->
<div id="content">
	<div class="Sign_up_div">
	<h2>Sign up Form</h2>
	<p id="member"> and become a member of tech ninjas group<p>

	<!--Sign up form -->
	<form action="" method="post">
	<!-- First NAME -->
		<p><label>First Name</label>
			<input type="text"  id="input_f_Name" name="f_Name" value="<?php if(isset($firstName)){ echo $firstName; } ?>"/>
				<span id="NameError"style="color:white;">
					<?php if(isset($firstNameErr)) { echo $firstNameErr; } ?>
				</span>
		</p>

	<!-- Last NAME -->
		<p><label for="input_l_Name">Last Name:</label><br>
			<input type="text" id="input_l_Name" name="l_Name" value="<?php if(isset($lastName)){ echo $lastName; } ?>"/>
				<span id="LastNameError" style="color:white;">
					<?php if(isset($lastNameErr)){ echo $lastNameErr; } ?>
				</span>
		</p>
	<!-- Gender -->	
		<p><label>Gender:</label>
			<input type="radio" id="input_female"  value="female" name="gender_name" checked> Female
			<input type="radio" id="input_male" value="male" name="gender_name"> Male 
			<input type="radio" id="input_other" value="male" name="gender_name"> other 
		</p>
    <!-- E-Mail -->    
		<p><label>E-Mail:</label>
			<input type="text"  id="input_email" name="email" value="<?php if(isset($email)){echo $email;}?>"/>
				<span style="color:white;">
					<?php	if(isset($emailerr)){	echo $emailerr;	} ?>
				</span>
	<!--city-->
		<p> <label for="select_city"> City</label><br>
			<select id="select_city">
				<option value="city">choose your city</option>
				<option value="Brampton">Brampton</option>
				<option value="Etobicoke">Etobicoke</option>
			</select>
		</p>
	<!--password-->
		<p><label for="input_password">Password</label> <br/>
			<input type="Password"  id="input_password" name="password" value="<?php if(isset($password)){ echo $password; } ?>">
			<span style="color:white"> 
			<?php
						if(isset($passwordERR))
						{
						echo $passwordERR;
						}
					?>
		</span>
		<br/>
		<label for="confirm_passowrd">Confirm Password</label> 
		<br/>
		<input type="Password" id="confirm_passowrd" name="con_password" value="<?php if(isset($c_password)){ echo $c_password; } ?>">
			<span style="color:white"> 
			<?php
						if(isset($c_passwordErr))
						{
						echo $c_passwordErr;
						}
					?>
		</span>
<br/>

    <input type="submit" value="Submit" />

    </form>

	<!-- Sign up form ends-->


<!-- Display out put-->
<div id="thanks_msg">
	<h3>Your details will display here.</h3>
		
		<table>
			<tbody>
				<tr>
					<th>First Name </th>
					<td><span id="first_name_display"><?php if(isset($firstName)){ echo $firstName; } ?></span></td>
				</tr>
				
				<tr>
					<th>Last Name</th>
					<td><span id="last_name_display"><?php if(isset($lastName)){ echo $lastName; } ?></span></td>
				</tr>

				<!--<tr>
					<th>Gender</th>
					<td><span id="gender_display"> </span> </td>
				</tr>-->

				<tr>
					<th>E-mail</th>
					<td><span id="email_display"><?php if(isset($email)){echo $email;}?></span></td>
				</tr>

				<!--<tr>
					<th>City </th>
					<td><span id="city_display"></span> </td>
				</tr>-->

				<tr>
					<th>Password</th>
					<td><span id="password_display"><?php if(isset($password)){ echo $password; } ?></span> </td>
				</tr>
				
				<tr> 
					<th>Confirm Password</th>
					<td><span id="confirm_passowrd"><?php if(isset($c_password)){ echo $c_password; } ?></span> </td>
				</tr>

			</tbody>
		</table>
</div>

</div><!-- end Sign_up_div -->
