<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


	 <script >
		
		var playlist=new Array('testa1.mp3','testb1.mp3','testc1.mp3','testd.mp3','teste.mp3','testf.mp3','testg.mp3','testh.mp3','testi.mp3','testj.mp3','testk.mp3','testl.mp3','testm.mp3','testn.mp3','testo.mp3','testp.mp3','testq.mp3','testr.mp3','tests.mp3','testt.mp3','testu.mp3','testv.mpeg','testw.mp3','testx.mp3','testy.mp3','testz.mp3','testspace.mp3');
		var keycodes=new Array("65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","32");
		var keyvalues=new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","SPACE");
        var audio=new Audio();
        window.addEventListener("keydown",checkKey1,false);
        function checkKey1(key){
            var x=key.keyCode;
            //document.getElementById('output_area').value=x; 
        	for(var i=0;i<playlist.length;i++){
        	if (x==keycodes[i]) {
        		audio.src=playlist[i];
        		audio.play();
                var y=keyvalues[i];
                document.getElementById("output_area").value=y;

        	}}
        }		
       	</script>
        <style >
        body{
            
    background: url(images/form-v9.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

        }
            #output_area{
                width:170px;
                height: 100px;
                top:38%;
                left: 39%;
                position: absolute;
                font-size: 80px;
                font-family: ; 
                text-align: center;

            }

        </style>
</head>
<body>

    <nav class="navbar navbar-light navbar-fixed-top" style="background-color:#173348;">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
    </div>
   </nav>
<div>
	<input type="textarea" name="" id="output_area" >

</div>
</body>
</html>