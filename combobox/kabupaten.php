<?php

include 'koneksi.php';

$propinsi_id = $_GET['propinsi_id'];
$query = "SELECT * FROM kabupaten WHERE id_propinsi='$propinsi_id'";
$kabupaten = mysqli_query($konek, $query);

echo "<select id='kabupaten'>";
while ($kab = mysqli_fetch_array($kabupaten)) {
  echo "<option value='$kab[id_kabupaten]'>$kab[nama_kabupaten]</option>";
}
echo "</select>";

 ?>
