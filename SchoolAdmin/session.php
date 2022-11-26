<?php 
    session_start();
    $nama=$_SESSION['username'];
    $level=$_SESSION['level'];
    $idu=$_SESSION['userID'];
    if ($level=="adminschool") {

    }
    elseif ($level=="") {
      echo "<script>alert('Hacker ??');
      location.href='../index.php'</script>";
    }else{
      
    }
?>