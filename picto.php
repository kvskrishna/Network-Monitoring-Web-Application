<html>
	<head>
		<title>
			Picto
		</title>
		<style>
			img{
				visibility: hidden;			
				}
		</style>
		<script>
			functionmyfunc(){
				
				for (var i=0; i < 17; i++) {
				var x=<?php echo "$Port[i]"?>; 
				if(x='Up')
				document.getElementById('gball'+(i+1)).style.visibility="visible";
				if(x='Down')
				document.getElementById('rball'+(i+1)).style.visibility="visible";
				
				};
				
			}
		</script>
		<?php
		$Host=$_POST["ta1"];
	$Com=$_POST["ta2"];
	$OID=$_POST["ta3"];
	$Port=array();
	$session = new SNMP(SNMP::VERSION_1, "$Host", "$Com");
	for ($x=1; $x<=16; $x++) {
	$string1="$OID.$x";
	$sysdescr = $session->get("$string1");
	$string2=$sysdescr{9};
	if($string2=="u"){
	$Port[x-1]="Up";}
	if($string2=="d"){
	$Port[x-1]="Down";}	
}?>
	</head>
	<body onload="myfunc(event)">
		<img style="z-index: 1;position: absolute; visibility: visible;" src="Server.jpg" width="95%" height="95%" />
		<img style="z-index: 2;position: relative;top: 317px;left: 330px;" id="rball1" src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 350px;" id="rball2"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball3" src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;"id="rball4" src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball5"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball6"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball7"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball8"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball9"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball10"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball11"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball12"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball13"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball14"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball15"src="red_ball.gif" width="15px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="rball16"src="red_ball.gif" width="15px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;left: 330px;" src="green_ball.gif" id="gball1"width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 350px;" id="gball2"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball3"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball4"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball5"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball6"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball7"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball8"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball9"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball10"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball11"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball12"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball13"src="green_ball.gif" width="10px" height="10px" />
		<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball14"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" id="gball15"src="green_ball.gif" width="10px" height="10px" />
<img style="z-index: 2;position: relative;top: 325px;margin-left: 20px;" sid="gball16"rc="green_ball.gif" width="10px" height="10px" />
</body>
</html>
