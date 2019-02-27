<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<title></title>
</head>
<body>

	<nav class="navbar navbar-light navbar-fixed-top" style="background-color:#173348;">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">logout</a></li>
    </ul>
    </div>
   </nav>

<section  id="projects">
	<div class="container">
		<center>
			<h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center">Categories</h3>
		</center>
		<br>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="project-card" >
					<a href="key.html">
					<img src="images/key.jpg" height="300" onmouseover="speakkey()" width="500" class="img-fluid" /></a>
					<br><br>
					<center><p>Key Drill</p></center>
				</div>
			</div>
			<div class="col-md-6">
				<div class="project-card">
					<a href="speed.html">
					<img src="images/word.jpg" onmouseover="speakword()" height="300" width="500" class="img-fluid" /></a>
					<br><br>
					<center><p>Word Drill</p></center>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="project-card" >
					<a href="word.html" >
					<img src="images/sen.jpg" height="300" onmouseover="speaksen()" width="500" class="img-fluid" /></a>
					<br><br>
					<center><p>Sentence Drill</p></center>
				</div>
			</div>
			<div class="col-md-3"></div>
	   </div>
	<
</section>

<script>
	function speakkey() {
	var audio = new Audio('audio/key.mp3');
      audio.play();
	}

	function speakword() {
	var audio = new Audio('audio/word.mp3');
      audio.play();
	}

	function speaksen() {
	var audio = new Audio('audio/send.mp3');
      audio.play();
	}
</script>

</body>
</html>