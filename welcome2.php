<html>
<head>
<title>
SNMP_get
</title>
</head>
<?php
	$Host=$_POST["ta1"];
	$Comm=$_POST["ta2"];
	$OID=$_POST["ta3"];
	$session = new SNMP(SNMP::VERSION_1, "$Host", "$Comm");
	$syscontact = snmpget("$Host", "$Comm", "$OID");
echo "$OID";
	echo "$syscontact";
?>
</html>
