<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Fullname = $_POST['Fullname'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];

$staffID = $_POST['ID'];
$schoolID = $_GET['ids'];

$sql=mysqli_query($koneksi,"insert into user values('','$Username','$Password','$Fullname','$Email','$Phone','schooladmin')");
$sqla=mysqli_query($koneksi,"SELECT 'userID' FROM user");
$cek = mysqli_num_rows($sqla);
echo $cek;
$sql2=mysqli_query($koneksi,"insert into schooladmin values('$staffID','schooladmin','$cek','$schoolID')");
if ($sql) {
		header("location:index.php");
}else{
echo "<script>alert('Gagal');
	location.href='#'</script>";
}
 
?>