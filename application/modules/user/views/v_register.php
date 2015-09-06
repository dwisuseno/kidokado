<!doctype html>
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body >
	<div style="text-align: left; position: auto">
		<h1>Register Now</h1>
		<p>Firstname
		<input class="input" placeholder="your firstname">
		&nbspLastname
		<input class="input" placeholder="your lastname"></p>
		<p>
			Username
			<input class="input" placeholder="username">
		</p>
		<p>
			Email
			<input class="input" placeholder="email">
		</p>
		<p>
			Male
			<input type="radio" name="sex" value="male">
			Female
			<input type="radio" name="sex" value="female">
		</p>
		<p>
			Tempat lahir 
			<input>
			Tanggal Lahir
			<input type="text" id="datepicker">
		</p>
		<p>
			Alamat
			<textarea  placeholder="alamat"></textarea>
			Kecamatan
			<select class="input" placeholder="kecamatan">
				<?php foreach ($kecamatan as $kec) { ?>
					<option><?php echo $kec->name ?></option>
				<?php } ?>
			</select>
			
			No Telepon
			<input type="text" class="input" placeholder="telepon">
		</p>
		<button class="button">submit</button>
	</div>
</body>
</html>