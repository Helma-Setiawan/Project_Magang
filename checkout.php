<?php
// include 'koneksi.php';

// $no_ktp  = $_GET["No_Ktp"];
// date_default_timezone_set('Asia/Jakarta');
// $time=date('G:i:s');

// $query="UPDATE cek_inout SET Check_out='$time' WHERE No_Ktp='$no_ktp' ";
// mysqli_query($koneksi, $query);
// menyimpan data id kedalam variabel
if(isset($_POST["action"]))
{
    if($_POST["action"] == "update")
    {
        update();
    }
    
}

function update()
{
    include 'koneksi.php';
    $no_ktp  = $_GET["No_Ktp"];
    date_default_timezone_set('Asia/Jakarta');
    $time=date('G:i:s');

    $query="UPDATE cek_inout SET Check_out='$time' WHERE No_Ktp='$no_ktp' ";
    mysqli_query($koneksi, $query);
}
// // mengalihkan ke halaman admin.php
// header("location:admin.php");
?>