<!DOCTYPE html>
<html>
<head>
	<title></title>
		

	<script>
        
            
		
		var wordvalue=new Array('cow','sunshine','rehabilitate','inhibit','valencia','voice','hello','hot','useless','sad','thunder','sky','playground','basketball','circuit','gender','corrupt','beauty','obess','network','pizza','whatsapp','fitness','ignore','jealous','black','blue','fat','small','cute','pajamas','couple','alligator');

		var playlists=new Array('sound1.aac','sound2.aac','sound3.aac','sound4.aac','sound5.aac','sound6.aac','sound7.aac','sound8.aac','sound9.aac','sound10.aac','sound11.aac','sound12.aac','sound13.aac','sound14.aac','sound15.aac','sound16.aac','sound17.aac','sound18.aac','sound19.aac','sound20.aac','sound21.aac','sound22.aac','sound23.aac','sound24.aac','sound25.aac');

        window.onload=function(){
            begFun();
        }
        function begFun(){
        var iter=0;
       
        secFun(iter){
            var audi=new Audio();
            audi.src=playlists[iter];
            audi.play();
            document.getElementById('word').value=wordvalue[iter];
            document.addEventListener("keydown",thi_fun,false);

            function thiFun(key){
                var temp=key.keyCode;
                if(temp=="13"){
                    var tempvar=document.getElementById('word').value;
                    var data=document.getElementById('users_input').value;
                    if(tempvar==data){
                        //sound play
                        if(iter!=24){
                            iter=iter+1;
                            document.getElementById('users_input').value='';
                            secFun(iter);
                        }
                    }
                    else{

                    }

                }

            }

        }
    }
        	

       
  </script>
    
</head>
<body style="margin-top:270px; ">
	<center>
<input type="textarea" name="" id="word">
    <br>
    <br>
	<input type="textarea" name="" autofocus="on" id="users_input">
</center>
</body>
</html>