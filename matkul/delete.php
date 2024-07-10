<?php   
    include 'connection.php';
    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM mata_kuliah WHERE id = $id ");
    echo "<script>window.location.href ='?page=matakuliah';</script>";
    
?>