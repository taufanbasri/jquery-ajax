<?php
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>jQuery AJAX</title>
  <script src="jquery-3.1.1.min.js" charset="utf-8"></script>
  <script type="text/javascript">
  function tampilkabupaten() {
    var propinsi_id = $("#propinsi").val();
    $.ajax({
      url: 'kabupaten.php',
      type: 'GET',
      data: "propinsi_id=" + propinsi_id,
      success: function(response) {
        $("#kabupaten").html(response);
      }
    });
  }
  </script>
</head>

<body onload="tampilkabupaten()">

  <select name="propinsi" id="propinsi" onchange="tampilkabupaten()">
    <?php

      $query = "SELECT * FROM propinsi";
      $prov = mysqli_query($konek, $query);

      while ($propinsi = mysqli_fetch_array($prov)) {
        echo "<option value='$propinsi[id_propinsi]'>$propinsi[nama_propinsi]</option>";
      }

     ?>
  </select>

  <select id="kabupaten"></select>


</body>

</html>
