<?php
session_start();

if (!isset($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<script> alert ('Silakan login terlebih dahulu'); 
        window.location = 'login.php'</script>"; 
    } else {   

  $sql=mysql_query('SELECT * from admin where username="'.$_SESSION['username'].'" LIMIT 1');
  while($rows= mysql_fetch_array($sql)){
  	$username=$rows['username'];
  }
}

?>