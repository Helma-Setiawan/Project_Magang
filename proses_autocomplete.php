<?php

include "koneksi.php";

if(isset($_POST['search']))
{
    $search = $_POST['search'];
    $query  = "SELECT * FROM cek_inout WHERE No_Ktp LIKE '%".$search."%' ";
    $result = mysqli_query($koneksi,$query);

    $response = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $response[] = array(
            "value" => $row['No_Ktp']
          
        );
    }

    echo json_encode($response);
}

    if(isset($_POST['btcheckin']))
    {
        date_default_timezone_set('Asia/Jakarta');
        $time       = date('G:i:s');
        $tgl        = date('Y-m-d');
        $keperluan  = htmlspecialchars($_POST['keperluan'], ENT_QUOTES);
        $no_ktp     = htmlspecialchars($_POST['no_ktp'], ENT_QUOTES);

        $checkin    = mysqli_query($koneksi, "INSERT INTO cek_inout SET  No_Ktp='$no_ktp', Tanggal='$tgl', Keperluan='$keperluan', Check_in='$time'");
        var_dump($checkin);
        if($checkin)
        {
            // echo "<script>
            // Swal.fire({title: 'Simpan Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            // }).then((result) => {
            //     if (result.value) {
            //         window.location = 'admin.php';
            //     }
            // })
            // location.reload(); 
            // </script>";
            echo "<script>
            alert('Data berhasil disimpan');
            </script>";
            header("Location:admin.php");
            
        }
        else
        {
                // echo "<script>
                // Swal.fire({title: 'Gagal Simpan Data',text: '',icon: 'error',confirmButtonText: 'OK'
                // }).then((result) => {
                //     if (result.value) {
                //         window.location = '?';
                //     }
                // })
                // location.reload(); 
                // </script>";
            echo "<script>
            alert('Data gagal disimpan');
            </script>";
            header("Location:admin.php");
        }   
    }

?>