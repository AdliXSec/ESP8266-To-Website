<?php 
$koneksi = new mysqli("localhost", "root", "", "websensor");

function bulan($bulan) {
    if($bulan == "1") {
        $b = "Januari";
    }elseif ($bulan == "2") {
        $b = "Februari";
    }elseif ($bulan == "3") {
        $b = "Maret";
    }elseif ($bulan == "4") {
        $b = "April";
    }elseif ($bulan == "5") {
        $b = "Mei";
    }elseif ($bulan == "6") {
        $b = "Juni";
    }elseif ($bulan == "7") {
        $b = "Juli";
    }elseif ($bulan == "8") {
        $b = "Agustus";
    }elseif ($bulan == "9") {
        $b = "September";
    }elseif ($bulan == "10") {
        $b = "Oktober";
    }elseif ($bulan == "11") {
        $b = "November";
    }else{
        $b = "Desember";
    }

    return $b;
}

date_default_timezone_set('Asia/Jakarta');
$JM = date('H:i');
$hari = date("d");
$bulan = bulan(date("m"));
$tahun = date("Y");

$waktusekarang = $hari.' '.$bulan.' '.$tahun.' '.$JM;

$query = $koneksi->query("SELECT * FROM ultrasonik");
$ambil = $query->fetch_assoc();

$bug = '';

if (isset($_GET['data'])) {
    $id = $_GET['data'];
    if ($id < 0) {
        $bug = "maaf akses di tolak anda memasukkan parameter yang salah data tidak akan di update";
    } else if (!is_numeric($id)) {
        $bug = "maaf akses di tolak anda memasukkan parameter yang salah data tidak akan di update";
    }
    
}



if ($ambil['tanggal_us'] != $waktusekarang AND !isset($_GET['data'])) {
    $data = 'Maaf Koneksi Dengan ESP8266 Terputus';
    $cm = '';
}else{
    $cm = 'CM';
    if(mysqli_num_rows($query) > 0){
        if(isset($_GET['data'])){
            $id=$_GET['data'];
            if(is_numeric($id)) {
                $koneksi->query("UPDATE ultrasonik SET sensor_us='$id', tanggal_us='$waktusekarang'");
            }else{
                $datas = "Maaf Koneksi Sedang Tidak Aktif";
            }
        }
        
    }else{
        $koneksi->query("INSERT INTO ultrasonik(sensor_us,tanggal_us) VALUES('$id','$waktusekarang')");
    }
    $data = $ambil["sensor_us"];
}

echo $data;


?>