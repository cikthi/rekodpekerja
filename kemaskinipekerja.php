<?php 
include('config.php');  

if(isset($_POST['no_kp'])) {      
    $nama_pekerja = $_POST['nama_pekerja']; 
    $no_kp = $_POST['no_kp']; 
    $jantina = $_POST['jantina']; 
    $no_hp = $_POST['no_hp']; 
     
    $sql = "UPDATE maklumatpekerja SET nama_pekerja ='$nama_pekerja', no_kp ='$no_kp', jantina = '$jantina', no_hp = '$no_hp' WHERE no_kp = '$no_kp'"; 
    $result = mysqli_query($conn, $sql);  
    if ($result) {
        echo "<script>alert('Berjaya kemaskini')</script>";echo "<script>window.location='senaraipekerja.php'</script>";  
    }else { 
        echo "<script>alert('Tidak berjaya kemaskini')</script>"; 
    }     
 }  


//  $no_kp = $_GET ['no_kp']; 
$sql = "SELECT * FROM maklumatpekerja "; 
$result = mysqli_query($conn, $sql); 
while ($user = mysqli_fetch_array($result)) { 
    $nama_pekerja = $user['nama_pekerja']; 
    $no_kp = $user['no_kp']; 
    $jantina = $user['jantina']; 
    $no_hp = $user['no_hp']; 
} 
?> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<html>
<h2 style="text-align: center;">UPDATE MAKLUMAT</h2>

<body style="background-color: khaki;">
    <fieldset style="width: 500px; text-align: center;margin:auto;">

        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
        <div class="mb-3">
    <label for="id">ID :</label> 
     <input type="text" class="form-control" name="id">    
     </div>
     <div class="mb-3">
    <label for="no_kp">IC :</label> 
     <input type="text" class="form-control" name="no_kp">    
     </div>
         

     <div class="mb-3">
    <label for="nama_pekerja">NAMA :</label>
     <input type="text"  class="form-control" name="nama_pekerja">
     </div>


     <div class="mb-3">
    
          <label for="no_hp"> HP :</label>
    
     
        <input type="text"  class="form-control" name="no_hp">
    
    </div>


    <div class="mb-3">
        <label for="jantina">JANTINA :</label>
    
    
         <select name="jantina" id="jantina"  class="form-control">
                <option value="jantina">--Sila pilih--</option>
                <option value="lelaki" name="jantina">Lelaki</option>
                <option value="perempuan" name="jantina">Perempuan</option>
            </select>
        
            </div>

            

            <!-- butang daftar & reset -->
            <button class="btn btn-success" type="submit">UPDATE</button>
            <button  class="btn btn-info" type="reset">Reset</button><br><br>
           
        </form>
        <button class="btn" >
            <a href="senaraipekerja.php" style="text-decoration: none;color:black">Back</a>
        </button><br><br>
    </fieldset>
</body>

</html>