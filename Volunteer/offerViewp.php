<?php 
// koneksi database
include 'koneksi.php';

$iddata = $_GET['ida'];

$sql=mysqli_query($koneksi,"UPDATE `offer` SET `offerstatus`='ACCEPTED' WHERE `get_ID_Request`='$iddata'");
$sql1=mysqli_query($koneksi,"UPDATE `request` SET `requestStatus`='CLOSED' WHERE `requestID`='$iddata'");
if ($sql) {
		header("location:school.php");
}else{
echo "<script>alert('Gagal');
	location.href='school.php'</script>";
}
 
?>