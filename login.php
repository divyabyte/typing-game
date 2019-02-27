<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-light navbar-fixed-top" style="background-color:#173348;">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="register.php">Sign Up</a></li>
    </ul>
    </div>
   </nav>

	<div class='loginform'>
		<img src="images/port.jpg" class='header' style="height: 100px;width: 100px;"></br><br>
		<h1 style="text-align: center;">Login here</h1>
		<form id="formvalue" style="padding: 0px 20px;">
		<p>Username</p>
		<input type="text" name="name" id="name" placeholder="Enter username" autofocus="on" required="required">
		<br><br>
		<p>Password</p>
		<input type="Password" name="pass" id="pass" placeholder="password" required="required">
	</br></br>
		<input type="submit" name="submit" value="login">
		</form>
	</div>

  <script >
    $(document).ready(function(){
            username();
          });


    function username()
    {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-IN";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('name').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById("pass").focus();
        password();
      }

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  } 
 function password()
    {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition1 = new webkitSpeechRecognition();

      recognition1.continuous = false;
      recognition1.interimResults = false;

      recognition1.lang = "en-IN";
      recognition1.start();

      recognition1.onresult = function(event) {
        document.getElementById('pass').value
                                 = event.results[0][0].transcript;
        recognition1.stop();      }

      recognition1.onerror = function(event) {
        recognition1.stop();
      }

    }
  } 
  </script>

	<script type="text/javascript">

    //function for login
    
    $("#formvalue").submit(function(e){

    e.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
      url: "api/login.php",
      type:"POST",
      data:formData,
      error:function(){
        alert("Error");
      },
      success:function(response){
        if(response=='')
        {
          window.location.href = "home.php";
        }
        else
        {
          alert(response);
        }
      }
    })

    });
  </script>
	
</body>
</html>