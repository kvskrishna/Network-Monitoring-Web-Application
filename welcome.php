<html>
<head>
<?php
$Host=$_POST['ta1'];
$Com=$_POST['ta2'];
$OID=$_POST["ta3"];
$session = new SNMP(SNMP::VERSION_1, "$Host", "$Com");
$sysdescr = $session->get("$OID");
$sysDescr = $session->get("sysDescr.0");
?>
<body onload="MyFunc()">
<div id="block" style=";width: 250px; height: 100px;margin-top:100px; margin-left:100px;"><font size="6">
<p id="para" align="middle" style="vertical-align: center; visibility: visible">
<?php
if($sysdescr{9}=="u"){ 
echo "Port "; echo substr($OID,13);echo " in "; echo substr($sysDescr,8);echo " is up ";
}
if($sysdescr{9}=="d"){
echo "Port "; echo substr($OID,13);echo " in "; echo substr($sysDescr,8);echo " is down ";
} ?>
</p>
</font>
</div>
</body>
</head>
</html>
