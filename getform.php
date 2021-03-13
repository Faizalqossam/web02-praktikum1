<?php


$siswa =$_GET['siswa'];
$matkul =$_GET['matkul'];
$nilai_uts =$_GET['nilai_uts'];
$nilai_uas =$_GET['nilai_uas'];
$nilai_tugas =$_GET['nilai_tugas'];
$nilai_akhir =is_numeric(35*$nilai_uas/100)+(30*$nilai_uts/100)+(35*$nilai_tugas/100);

echo 'Nama : '.$siswa."</br>";
echo 'Mata Kuliah : '.$matkul."</br>";
echo 'Nilai UTS : '.$nilai_uts."</br>";
echo 'Nilai UAS : '.$nilai_uas."</br>";
echo 'Nilai Tugas/Praktikum : '.$nilai_tugas."</br>";
echo 'Nilai Akhir : '.$nilai_akhir

?>