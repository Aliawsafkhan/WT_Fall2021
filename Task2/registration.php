<html>

<head>
	<meta charset="UTF-8">
</head>

<body>
	<form method="post" action="info.php">

		<div id="form_page">

			<div id="form_body">
				<div id="head">
					<h1 id="heading">Registration Form</h1>
				</div>
				<br />
				<div id="input_name" class="input">
					<input id="name" type="text"
						Placeholder="First Name" name="fname"
						required>
				</div>
				<div id="input_class" class="input">
					<input type="text" placeholder=
						"Last Name" name="lname" required>
				</div>
				<div id="input_year" class="input">
					<input id="school" type="number"
						name="age"
						placeholder="Age">
				</div>

				<div id="input_year" class="input">
					<input id="school" type="text"
						name="des"
						placeholder="Designation">

						<input type="radio" id="jp" name="designation" value="JP"><label for="JP">Junior Programmer</label>
						<input type="radio" id="sp" name="designation" value="SP"><label for="SP">Senior Programmer</label>
						<input type="radio" id="pl" name="designation" value="PL"><label for="PL">Project Lead</label>
				</div>

				<div id="input_year" class="input">
					<input id="school" type="text"
						name="lan"
						placeholder="Preeferred Language">

						<input type="checkbox" id="java" name="prefLang" value="java"><label for="java">JAVA</label>
						<input type="checkbox" id="php" name="prefLang" value="php"><label for="php">PHP</label>
						<input type="checkbox" id="cpp" name="prefLang" value="cpp"><label for="cpp">C++</label>
				</div>

				<div id="input_year" class="input">
					<input id="school" type="email"
						name="mail"
						placeholder="E-mail">
				</div>

				<div id="input_year" class="number">
					<input id="school" type="password"
						name="pw"
						placeholder="Password">
				</div>

				<div class="id input">
					<input id="submit" type="submit"
						name="submit" value="submit"
						onclick="on_submit()">
				</div>
			</div>
		</div>
	</form>
</body>

</html>
