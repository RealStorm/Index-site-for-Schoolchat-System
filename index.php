	<!DOCTYPE html>
	<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>School Chatt</title>
		<link rel="stylesheet" href="style/main.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,700,900" rel="stylesheet">
		<script src="https://use.fontawesome.com/7f96c6d82a.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
		<script src="js/hideshow.js"></script>
	</head>
		<body>
			<header>
				<a href="../index.php"><img src="../img/schoolchattlogo.png" alt="Logo"></a>			
			</header>
			<main>
				<div id="form-divlog">
					<form action="pages/UserLogin.php" method="post" id="form-log">
						<div class="input-box">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="email" name="UserMail" maxlength="20" placeholder="Example@example.se" class="form-input">
						</div>
						<div class="input-box">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input type="password" name="UserPassword" placeholder="Lösenord" class="form-input">
						</div>
						<input type="submit" value="LOGGA IN" id="log-button">
						<button id="button-signup" type="button"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
					</form>
				</div>
				<div id="form-divreg">
					<form action="pages/InsertUser.php" method="post" id="form-reg">
						<div class="input-box">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" name="UserName" maxlength="20" placeholder="Användarnamn" class="form-input">
						</div>
						<div class="input-box">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="email" name="UserMail" maxlength="35" placeholder="Example@example.se" class="form-input">
						</div>							
						<div class="input-box">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input type="password" name="UserPassword" placeholder="Lösenord" class="form-input">
						</div>
						<input type="submit" value="Skapa Konto" id="create-button">
						<button id="button-signin" type="button"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
					</form>
				</div>
			</main>
			<footer>
				<nav class="footer-navigation">
					<ul>
						<li><a href="sites/about.html">Om Oss</a></li>
					</ul>
				</nav>
				<span class="footer-text">School-Chatt © 2016 Patryk, Oleg, Zaven</span>
			</footer>
		</body>
	</html>
	