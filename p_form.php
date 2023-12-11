<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama_lengkap = $_POST["nama_lengkap"];
    $umur = $_POST["umur"];
    $gender = isset($_POST["radios"]) ? $_POST["radios"] : "";
    $pendidikan = $_POST["pendidikan"];
    
    // Menggunakan isset() untuk memastikan bahwa variabel 'hobi' ada dan merupakan array
    $hobi = isset($_POST["hobi"]) ? $_POST["hobi"] : [];

    // Menampilkan hasil
    echo "<h2>Hasil Formulir:</h2>";
    echo "<p>Nama Lengkap: $nama_lengkap</p>";
    echo "<p>Umur: $umur</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Pendidikan: $pendidikan</p>";

    if (!empty($hobi)) {
        echo "<p>Hobi:</p><ul>";
        foreach ($hobi as $hobi_item) {
            echo "<li>$hobi_item</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada hobi yang dipilih.</p>";
    }
} else {
    // Jika bukan metode POST, tampilkan pesan kesalahan
    echo "Metode pengiriman formulir tidak valid.";
}
?>

