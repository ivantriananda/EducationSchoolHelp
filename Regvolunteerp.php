<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Fullname = $_POST['Fullname'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Occupation = $_POST['Occupation'];
$DateOfBirth = $_POST['DateOfBirth'];
session_start();
$idsch=$_SESSION['schoolID'];

$sql=mysqli_query($koneksi,"insert into user values('','$Username','$Password','$Fullname','$Email','$Phone','volunteer')");
$sqla=mysqli_query($koneksi,"SELECT 'userID' FROM user");
$cek = mysqli_num_rows($sqla);
echo $cek;
$sql2=mysqli_query($koneksi,"insert into volunteer values('$DateOfBirth','$Occupation','$cek')");
if ($sql) {
		header("location:login.php");
}else{
echo "<script>alert('Gagal');
	location.href='Regvolunteer.php'</script>";
}
 
?>