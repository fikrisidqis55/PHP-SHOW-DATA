<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
</head>
<body>

  <div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table class=" table table-bordered table-hovered" align="center">
  <tr>
  	<th>id</th>
  	<th>username</th>
  	<th>password</th>
  	<th>level</th>
  	<th>fullname</th>
  </tr></div>
  <?php

  include('koneksion.php');

  $sql_tampil ="SELECT * FROM users";

  $peserta=mysqli_query($conn,$sql_tampil);

  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$baris_data['ID'].'</td>
  		<td>'.$baris_data['USERNAME'].'</td>
  		<td>'.$baris_data['PASSWORD'].'</td>
  		<td>'.$baris_data['LEVEL'].'</td>
  		<td>'.$baris_data['FULLNAME'].'</td>
  	</tr>';

    //kaya uud kiye pak wkwk
  }
  ?>
</body>
</html>