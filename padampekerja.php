<?php
// Assuming you have already established a database connection
include('config.php');
if(isset($_GET['nama_pekerja'])){
$nama_pekerja = $_GET ['nama_pekerja']; 
}

 $sql = "DELETE  FROM maklumatpekerja  WHERE nama_pekerja = '$nama_pekerja'" ;
 $result = mysqli_query($conn, $sql);
 if ($result == TRUE)
 {
 echo "<script>alert('Berjaya padam rekod')
 window.location='senaraipekerja.php'</script>";
 }
    else 
   
{
echo "<script>alert('Tidak berjaya padam rekod')</script>";

}

?>

<!-- Display a confirmation message with a delete button -->
<p>Are you sure you want to delete this record?</p>
<a href="padampekerja.php?nama_pekerja=<?php echo $_GET["nama_pekerja"]; ?>">Delete</a>
