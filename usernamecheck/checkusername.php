<?php

include 'koneksi.php';

$username = $_POST['username'];
$query = "SELECT * FROM member WHERE username='$username'";
$userquery = mysqli_query($konek, $query);
$result = mysqli_num_rows($userquery);

if ($result == 1) {
  echo "Username <b>$username</b> sudah digunakan, silahkan gunakan username lain";
}else {
  echo "Username <b>$username</b> dapat digunakan";
}

 ?>
