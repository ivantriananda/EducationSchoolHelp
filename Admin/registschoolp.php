<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['City'];

$sql=mysqli_query($koneksi,"insert into school values('','$name','$address','$city')");
if ($sql) {
		$data = mysqli_query($koneksi,"select * from school where schoolName='$name' and address='$address'");
		$query=mysqli_fetch_array($data);
		$schoolID = $query['schoolID'];
		header("location:regAdministrator.php?id=$schoolID");
}else{
echo "<script>alert('Gagal');
	location.href='regAdministrator.php'</script>";
}
 
?>