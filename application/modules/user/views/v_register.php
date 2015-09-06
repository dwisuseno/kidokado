<!doctype html>
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body >
	<div style="text-align: center; position: auto">
		<form method="post" action="<?php echo base_url()?>user/register/registering">
			<h1>Register Now</h1>
			<p>Firstname
			<input class="input" name="firstname" placeholder="your firstname" type="text" required>
			&nbspLastname
			<input class="input" name="lastname" placeholder="your lastname" type="text" required></p>
			<p>
				Username
				<input class="input" name="username" placeholder="username" type="text" required>
			</p>
			<p>
				Email
				<input id="email" name="email" class="input" value="" required placeholder="email" type="text">

				
			</p>
			<p >
				Type Your Password
				<input id="pwd1" type="password" class="input" value="" name="password2" placeholder="password" required>
				Re-Type Password
				<input onchange="myFunction()" id="pwd2" type="password" class="input" value="" required name="password" placeholder="password">
				<p id="hasil"></p>
			</p>
			<button id="button1" class="button">submit</button>
		</form>
	</div>
	<script type="text/javascript">
		function myFunction() {
			var pwd1 = document.getElementById("pwd1").value;
		    var pwd2 = document.getElementById("pwd2").value;
		    if(pwd1 == pwd2){
		    	document.getElementById("hasil").innerHTML = "Password telah sama ";
		    	document.getElementById("button1").disabled=false;
		    }
		    else {
		    	document.getElementById("hasil").innerHTML = "Password tidak sama. Silahkan ketik ulang password anda ";
		    	document.getElementById("button1").disabled=true;
		    }
		    
		}
	</script>
</body>
</html>