<?php
	require("functions.php");
	$notice = "";
	$allIdeas = "";
	
	//kui pole sisseloginud, siis sisselogimise lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//kui logib välja
	if (isset($_GET["logout"])){
		//lõpetame sessiooni
		session_destroy();
		header("Location: login.php");
	}
	
	//kui soovitakse ideed salvestada
	if(isset($_POST["ideaBtn"])){
		
		if(isset($_POST["idea"]) and isset($_POST["ideaColor"]) and !empty($_POST["idea"]) and !empty($_POST["ideaColor"])){
			$myIdea = test_input($_POST["idea"]);
			$notice = saveIdea($myIdea, $_POST["ideaColor"]);
		}
	}
	
	$allIdeas = readAllIdeas();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Krislyn Luks
	</title>
</head>
<body>
	<h1>Krislyn</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p><a href="?logout=1">Logi välja</a>!</p>
	<p><a href="main.php">Pealeht</a></p>
	<hr>
	<h2>Lisa uus mõte</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>Päeva esimene mõte: </label>
		<input name="idea" type="text">
		<br>
		<label>mõttega seostuv värv: </label>
		<input name="ideaColor" type="color">
		<br>
		<input name="ideaBtn" type="submit" value="Salvesta">
		
	</form>
	<hr>
	<h2>Senised mõtted</h2>
	<div style="width: 40%>
		<?php echo $allIdeas; ?>
	</div>
	
</body>
</html>