<?php
    include "koneksi.php";
    // uji jika tombol simpan di klik
    if (isset($_POST["btsimpan"]))
    {
        $no_ktp   =htmlspecialchars($_POST['No_Ktp'], ENT_QUOTES);
        $tgl      =date('Y-m-d');
        //htmlspecialchars agara inputan lebih aman dari injection
        $nama     =htmlspecialchars($_POST['Nama_tamu'], ENT_QUOTES);
        $alamat   =htmlspecialchars($_POST['Alamat_tamu'], ENT_QUOTES);
        $no_hp    =htmlspecialchars($_POST['No_Hp'], ENT_QUOTES);
        $instansi =htmlspecialchars($_POST['Instansi'], ENT_QUOTES);
        $keperluan=htmlspecialchars($_POST['Keperluan'], ENT_QUOTES);
        $checkin  =htmlspecialchars($_POST['Check_in'], ENT_QUOTES);
        
        //persiapan query simpan data
        $simpan   = mysqli_query($koneksi, "INSERT INTO tb_tamu SET No_Ktp='$no_ktp', Nama_tamu='$nama', Alamat_tamu='$alamat', No_Hp='$no_hp', Instansi='$instansi'");
        $simpan  = mysqli_query($koneksi, "INSERT INTO cek_inout SET id_inout='', No_Ktp='$no_ktp', Tanggal='$tgl', Keperluan='$keperluan', Check_in='$checkin'");


        if($simpan)
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