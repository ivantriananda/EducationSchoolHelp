<?php 
    session_start();
    $nama=$_SESSION['username'];
    $level=$_SESSION['level'];
    if ($level=="admin") {

    }
    elseif ($level=="") {
      echo "<script>alert('Hacker ??');
      location.href='../index.php'</script>";
    }else{
      
    }
?>