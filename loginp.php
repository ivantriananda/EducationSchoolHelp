<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
	$query=mysqli_fetch_array($data);
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $query['level'];
    $_SESSION['userID'] = $query['userID'];
    
    if ($query['level']=="admin") {
	    header("location:admin/index.php");
    }
	elseif ($query['level']=="volunteer") {
	    header("location:Volunteer/index.php");
	}elseif ($query['level']=="schooladmin") {
	    header("location:SchoolAdmin/index.php");
	}
	else{
	    header("location:=index.php");
    }
}else{
	header("location:index.php?pesan=gagal");
}
?>