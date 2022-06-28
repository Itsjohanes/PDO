<?php
/*

keterangan : nama database nya = pesan
             nama tabel nya  = pesan
             Struktur tabel : ID(AUTO INCREMENT PRIMARY KEY),nama,email,subjek,pesan

MADE BY johannes 

*/
try {
    $conn = new PDO("mysql:host = localhost;dbname  = pesan", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*pdo CREATE
$res = $conn->query("INSERT into pesan.pesan VALUES(1,'JOHN','JOG@yahoo.com','kamu','Kamu cantik')");
echo $res->rowCount() . "berhasil tambah data";*/
    /*PDO READ
$read = $conn->query("SELECT * from pesan.pesan");
while ($row  = $read->fetch()) {
    echo $row['nama'];
}
*/
    /*
PDO UPDATE
$update = $conn->query("UPDATE pesan.pesan SET nama = 'asep' where id = '1'");
echo $update->rowCount() . 'data diperbaruhi';*/

    /*
PDO DELETE
delete = $conn->query("DELETE  from pesan.pesan where id = '1'");
echo $delete->rowCount() . "berhasil delete data anda";
*/
    $conn = null;
} catch (PDOException $error) {
    die("koneksi gagal" . $error->getMessage());
}
