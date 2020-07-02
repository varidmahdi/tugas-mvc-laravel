<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi-SanberBook</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>

	<form action="{{ url('welcome') }}" method="POST">
		@csrf
		<label>First name:</label><br><br>
		<input type="text" id="firstname" name="firstname"><br><br>

		<label>Last name:</label><br><br>
		<input type="text" id="lastname" name="lastname"><br><br>

		<label>Gender:</label><br><br>
		<input type="radio" name="gender" value="male"> Male <br>
		<input type="radio" name="gender" value="female"> Female <br>
		<input type="radio" name="gender" value="other"> Other <br><br>

		<label>Nationality:</label><br><br>
		<select name="nationality">
			<option value="Afganistan">Afganistan</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Jepang">Jepang</option>
		</select><br><br>

		<label>Language Spoken:</label><br><br>
		<input type="checkbox" name="language" value="indonesia"> Bahasa Indonesia <br>
		<input type="checkbox" name="language" value="english"> English <br>
		<input type="checkbox" name="language" value="other"> Other <br><br>
	

		<label>Bio:</label><br><br>
		<textarea name="bio" rows="10" cols="30"></textarea><br><br>

		<input type="submit" value="Sign Up">
	</form>
</body>
</html>