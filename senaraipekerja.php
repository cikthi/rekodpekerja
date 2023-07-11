<?php
//sambung ke pangkalan data 
include "config.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container">
  <button class="btn btn-info"><a href="tambahmaklumat.php" style="color: black;text-decoration:none;">Add</a></button>
  </div>
</nav>

    <h3>
        SENARAI PEKERJA
    </h3>
    <table class="table table-success table-striped">
  

   
        <th>ID</th>
        <th>NAMA PEKERJA</th>
        <th>NO KP</th>
        <th>NO HP</th>
        <th>JANTINA</th>
        <th>CACATAN</th>

        <?php
	

	$sql = "SELECT * FROM maklumatpekerja ORDER BY id";
	$data = mysqli_query($conn, $sql);  
	$id = 1;          
	while ($user = mysqli_fetch_array($data)) {
	?>
     <tr>
        <td><?php echo " " . $user ["id"]  ?></td>
		<td><?php echo " " . $user["nama_pekerja"] ?></td>
		<td><?php echo " " . $user ["no_kp"]  ?></td>
		<td><?php echo " " . $user ["no_hp"]  ?></td>
		<td><?php echo " " . $user["jantina"] ?></td>
		<td><button type="button" class="btn";><a href="padampekerja.php
			?nama_pekerja=<?php
			echo $user['nama_pekerja'];?>" style="color: #000000;text-decoration:none;">Delete</a></button>
					<button type="button" class="btn"><a href="kemaskinipekerja.php" style="color: #000000;text-decoration:none;">Update</a> </button>
					
				</td>
			</tr>
		
		
 <center>
             <?php $id = $id + 1; } ?></td>
           </center>
</table>
    
</body>