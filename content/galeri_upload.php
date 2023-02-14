<?php
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$type_file = $_FILES['gambar']['type'];
$size_file = $_FILES['gambar']['size'];

$allowedFile = ['png', 'jpg', 'jpeg'];
$tipe = pathinfo($nama_file, PATHINFO_EXTENSION);

if (in_array($tipe, $allowedFile)) {
    if ($size_file > 1000000) {
        echo "File tidak boleh lebih dari 1mb";
    } else {
        if (move_uploaded_file($tmp_file, "img/" . $nama_file)) {
            echo "file berhasil diupload";
        } else {
            echo "file gagal diupload";
        }
    }
} else {
    echo "File tidak support";
}
