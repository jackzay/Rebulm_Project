<?php
include_once('connect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $kode = $_POST['kode'];
    
        $query = "UPDATE registrasi SET nama='$nama', no_hp='$no_hp', email='$email', username='$username', password='$pass',kode='$kode' WHERE id='$id'";
        $update = mysqli_query($conn, $query);
        
        if($update){
            echo "<script>alert('Profile Updated !');window.location.href='home.php'</script>";
         }else {
            echo "<script>alert('Update Failed !');window.location.href='home.php'</script>";
        }
    }

?>