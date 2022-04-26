<?php 
require_once("include/config.php");
if(!empty($_POST["correo"])) {
	$correo= $_POST["correo"];
	
		$result =mysqli_query($con,"SELECT correo FROM estudiante WHERE correo='$correo'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Correo ya en uso.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Correo Disponible.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
