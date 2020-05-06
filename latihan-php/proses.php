<?php 
$name = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_l = $_POST["tl"];
$tmp_l = $_POST["tempatlahir"];
$umur = $_POST["umur"];
$hoby = $_POST["hobby"];
$ket = $_POST["keterangan"];

echo "Nama Lengkap: ", $name;
echo "<br>";
echo "NIM: ", $nim;
echo "<br>";
echo "Tanggal Lahir: ", $tgl_l;
echo "<br>";
echo "Tempat Lahir: ", $tmp_l;
echo "<br>";
echo "Umur: ", $umur;
if($umur <= 10){
    echo " (Anak-anak)";
}elseif($umur <= 20){
    echo " (Remaja)";
}elseif($umur <= 25){
    echo " (Dewasa)";
}else{
    echo " (Lansia/Tua)";
}
echo "<br>";
echo "Hobby: ", $hoby;
echo "<br>";
echo "Keterangan: ", $ket;
?>