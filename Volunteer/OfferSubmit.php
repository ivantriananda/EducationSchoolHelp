<?php 
// koneksi database
include 'koneksi.php';
session_start();
$nama=$_SESSION['username'];
$level=$_SESSION['level'];
$id=$_SESSION['userID'];
if ($level=="admin" or $level=="volunteer") {

}
elseif ($level=="") {
  echo "<script>alert('Hacker ??');
  location.href='login.php'</script>";
}else{
  
}
 
// menangkap data yang di kirim dari form
$iddata = $_GET['ida'];
$date= date("d-m-y");
$sql=mysqli_query($koneksi,"insert into offer values('','$date','','PENDING','$iddata','$id')");
if ($sql) {
		header("location:school.php");
}else{
echo "<script>alert('Gagal');
	location.href='school.php'</script>";
}
 
?>