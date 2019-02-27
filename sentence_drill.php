<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		#textspace{
			width: 100%;
			height:110px;
			top:24%;
			position: absolute;
			font-size: 80px;
			text-align: center;
		}
		#userspace{
			width: 80%;
			height: 110px;
			top: 45%;
			left: 10%;
			position: absolute;
			font-size: 80px;
		}
	</style>
<script >
	
	var sentences=new Array('the girl in blue dress is my classmate','he is a man of ettiquettes','the man lives under the bridge','an empty brain is a workshop of devil','consistency is the key to success','sun rises in the east','the quick brown fox jumps over a lazy dog');
	
	var audiolist=new Array('t1.mp3','t2.mp3','t3.mp3','t4.mp3','t5.mp3','t6.mp3','t7.mp3');
	window.onload=function (){
		fun1();
	}
	function fun1(){

		var i=0;
		fun2(i);
		function fun2(i){
            var audi=new Audio();
			audi.src=audiolist[i];
            audi.play();
			document.getElementById('textspace').value=sentences[i];
			 
			document.addEventListener("keydown",fun3,false);
           
			function fun3(key){
				var enter=key.keyCode;
				if(enter=="13"){
					var temp=document.getElementById('userspace').value;
					var data=document.getElementById('textspace').value;
					if(temp==data){
						audi.src='right.acc';
						audi.play();
						if (i!=6) {
						document.getElementById('userspace').value='';
						i=i+1;
						fun2(i);
					}}
					else{
						

					}

					
				}


			}

		}
	}
</script>
</head>
<body>
<input type="textarea" name="" id="textspace">
<input type="textarea" name="" id="userspace" autofocus="on" ;>

</body>
</html>