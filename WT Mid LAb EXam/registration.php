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
                <div id="input_class" class="input">
					<input id="school" type="email"
						name="mail"
						placeholder="E-mail">
				</div>

				<

				<div id="input_class" class="input">
					<input id="school" type="text"
						name="gender"
						placeholder="Gender">

						<input type="radio" id="jp" name="gender" value="JP"><label for="JP">Male</label>
						<input type="radio" id="sp" name="gender" value="SP"><label for="SP">Female</label>
						
				</div>

                <div id="input_class" class="input">
					<input id="school" type="number"
						name="mnumber"
						placeholder="Mobile Number">
				</div>

                <div id="input_class" class="input">
					<input id="school" type="number"
						name="ssc"
						placeholder="SSC Result">
				</div>

                <div id="input_class" class="input">
					<input id="school" type="number"
						name="hsc"
						placeholder="HSC Result">
				</div>

				

				<div id="input_class" class="number">
					<input id="school" type="text"
						name="course"
						placeholder="Course">
				</div>
                <div id="input_class" class="number">
					<input id="school" type="number"
						name="yr"
						placeholder="Year">
				</div>
                <div id="input_class" class="number">
					<input id="school" type="text"
						name="sm"
						placeholder="semester">
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