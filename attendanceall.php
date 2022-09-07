<?php


    
    
    ?>
        <p id="statusmes" name="statusmes" ></p>
        
        <br>
    <p id="demographic" name="demographic" ></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<?php








if($_REQUEST['rand']==''){
$idn=001;
}else{
$idn=$_REQUEST['rand'];
}

$web=$_REQUEST['web'];



echo '<br>';

$pan = $first.$_REQUEST['alphabet'].'P'.$name[0];


echo '<script>

GetSender('.$idn.');

function GetSender(randn){ 
$.ajax({
			url:"aall.php?rand="+randn+"&web='.$web.'",
			method:"GET",
			error: function(){
			 GetSender(randn);
},
			success:function(data){
			
		
			      var str2 = " Service started and at  "+randn;
                         var result = str2.fontcolor("#FF3737");
                  document.getElementById("statusmes").innerHTML = "&nbsp<b>"+result+"</b>";
		
			
			
			
			    	var pdata= document.getElementById("demographic").innerHTML;
			
                  document.getElementById("demographic").innerHTML = pdata +data;
		
			if(randn=="80"){
			   	var pdata= document.getElementById("demographic").innerHTML;
			
                  document.getElementById("demographic").innerHTML = pdata +"<br><a >1000 Reached enter next alphabet</a><br>";  
                  
                  
                   var str2 = " Completed Service"+randn;
                         var result = str2.fontcolor("#06CB5A");
                  document.getElementById("statusmes").innerHTML = "&nbsp<b>"+result+"</b>";
                  
                  
                  
			}else{
			var mina  = "1";
			var randnn =  +randn + +mina;
			  GetSender(randnn);
			}
			
			
			}
});
};		   
			    </script>';


?>





