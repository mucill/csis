<?php
//koneksi Database
$server = "localhost";
$user = "root";
$pass = "";
$database = "issue";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_eror($koneksi));

//jika tombol simpan diklik
if(isset($_POST['bsimpan']))
    {
        //pengujian apakah data akan diedit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //data akan diedit
            
            $edit = mysqli_query($koneksi, " UPDATE daftar_issue set
                                            client = '$_POST[tclient]',
                                            aplikasi = '$_POST[taplikasi]',
                                            status = '$_POST[tstatus]',
                                            jenis = '$_POST[tjenis]',
                                            laporan = '$_POST[tlaporan]',
                                            tanggal_buat = '$_POST[ttanggal_buat]',
                                            tanggal_update = '$_POST[ttanggal_update]',
                                            WHERE  client = '$_GET[id]'
                            ");
        else
        {
            //data akan disimpan baru
            $simpan = mysqli_query($koneksi, "INSERT INTO daftar_issue (client, aplikasi, status, jenis, laporan, tanggal_buat, tanggal_update)
                            VALUES ('$_POST[tclient]',
                                    '$_POST[taplikasi]',
                                    '$_POST[tstatus]',
                                    '$_POST[tjenis]',
                                    '$_POST[tlaporan]',
                                    '$_POST[ttanggal_buat]',
                                    '$_POST[ttanggal_update]')
                            ");
        if(simpan)
        {
            echo "<script>
            alert('simpan data suksess!');
            document.location='index.php';
            </script>";
        }
        else
        {
            echo "<script>
            alert('simpan data GAGAL!');
            document.location='index.php';
            </script>";
        }
        }


    }

    //pengujian jika tombol hapus/edit diklik
    if(isset($_GET['hal']))
        {
            //PENGUJIAN JIKA EDIT DATA
            if($_GET['hal'] ==  "edit")
            {
                //Tampilkan data yg akan diedit
                $tampil = mysqli_query($koneksi,"SELECT * FROM data_customer WHERE nama = '$_GET[id]' ");
                $data = mysqli_fetch_array($tampil);
                if($data)
                {
                    //jika data ditemukan maka data ditampung dulu kedalam variabel
                    $vnama = $data['nama'];
                    $valamat = $data['alamat'];
                    $vno_hp = $data['no_hp'];
                    $vtanggal_buat = $data['tanggal_buat'];
                    $vtanggal_update = $data['tanggal_update'];
                }
            }
            else if ($_GET['hal'] == "hapus")
            {
                //persiapan hapus data
                $hapus = mysqli_query($koneksi, "DELETE FROM data_customer WHERE nama = '$_GET[id]' ");
                if($hapus){
                    echo "<script>
                            alert('hapus data suksess!');
                            document.location='koneksi.php';
                            </script>";
                }
            }
        }

?>