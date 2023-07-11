<?php

include ('config.php');

if(isset($_POST ['no_kp'])){
    $id = $_POST['id'];
    $nama_pekerja = $_POST ['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST ['jantina'];
    $no_hp =$_POST ['no_hp'];
    
    $sql = "INSERT INTO maklumatpekerja (id,nama_pekerja,no_kp,jantina,no_hp) VALUES ('$id','$nama_pekerja','$no_kp','$jantina','$no_hp')";
    $result = mysqli_query ($conn,$sql);

    if($result){
        echo "<script>alert('Berjaya kemaskini') window.location = 'senaraipekerja.php'</script>";
    }else{
        echo "<script>alert('Tidak berjaya kemaskini') window.location = 'tambahmaklumat.php'</script> ";
    }}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <body style="background-color:aliceblue;margin:30px">

    <nav class="navbar navbar-light bg-light">
  <div class="container">
      <button class="btn btn-info"><a href="senaraipekerja.php" style="color: black;text-decoration:none;">BACK</a></button>
  </div>
</nav>

        <form  method="POST">
            <table>
            <h1>ADD MAKLUMAT</h1>

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
        <label for="jantina">JANITNA :</label>
    
    
         <select name="jantina" id="jantina"  class="form-control">
                <option value="jantina">--Sila pilih--</option>
                <option value="lelaki">Lelaki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        
            </div>
        
            <div class="mb-3">
    
                <button type="submit" class="btn btn-success">Add</a></button>
                <button type="reset" class="btn">Clear</button>
            
           
                </div>
        </table>
        </form>
    </body>