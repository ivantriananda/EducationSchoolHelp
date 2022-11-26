<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Description = $_POST['Description'];
$proposeddate = $_POST['proposeddate'];
$TimeOfTutorial = $_POST['TimeOfTutorial'];
$StudentLevel = $_POST['StudentLevel'];
$NumberofExpectedStudent = $_POST['NumberofExpectedStudent'];

$date= date("d-m-y");

$sql=mysqli_query($koneksi,"insert into request values('','$date','New','$Description','')");
$sqla=mysqli_query($koneksi,"SELECT 'userID' FROM request");
$cek = mysqli_num_rows($sqla);
echo $cek;
$sql2=mysqli_query($koneksi,"insert into tutorialrequest values('$proposeddate','','$StudentLevel','$NumberofExpectedStudent','$cek')");
$sql3=mysqli_query($koneksi,"insert into resourcerequest values('','','$cek')");
if ($sql) {
		header("location:login.php");
}else{
echo "<script>alert('Gagal');
	location.href='Regvolunteer.php'</script>";
}
 
?>