<html>
<head><title>
    Pic</title></head>
<?php
$Host=$_POST["ta1"];
$Com=$_POST["ta2"];
$OID=$_POST["ta3"];
$Udb=$_POST["ta4"];
$Pdb=$_POST["ta5"];
$Port=array();
$format = '%d/%m/%Y %H:%M:%S';
$strf = strftime($format);
$session = new SNMP(SNMP::VERSION_1, "$Host", "$Com");
for ($x=1; $x<=16; $x++) {
  $string1="$OID.$x";
  $sysdescr = $session->get("$string1");
  $string2=$sysdescr{9};
if($string2=="u"){
echo "Port $x is up ";
echo "<br>";
  $Port[x-1]="Up";
  }
if($string2=="d"){
echo "Port $x is down ";
echo "<br>";
  $Port[x-1]="Down";
  }	
}
$con=mysqli_connect("localhost","$Udb","$Pdb","Log");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con,"INSERT INTO Log (Time,Port1,Port2,Port3,Port4,Port5,Port6,Port7,Port8,Port9,Port10,Port11,Port12,Port13,Port14,Port15,Port16)
VALUES ('$strf','$Port[0]','$Port[1]','$Port[2]','$Port[3]','$Port[4]','$Port[5]','$Port[6]','$Port[7]','$Port[8]','$Port[9]','$Port[10]','$Port[11]','$Port[12]','$Port[13]','$Port[14]','$Port[15]')");
echo "Log table updated";
mysqli_close($con);
?>
<a href="picto.php" target="_blank">Pictorial representation</a>
</html>