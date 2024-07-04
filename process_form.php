<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan mengamankan data dari form
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Menyimpan data ke dalam file
    $file = fopen("suggestions.txt" ,"a"); // Membuka file dengan mode append
    if ($file) {
        fwrite($file, "Nama: $name\nNo.Tlp: $phone\nSaran: $message\n\n");
        fclose($file); // Menutup file setelah menulis data
        
        // Mengembalikan data yang ditulis dan pesan terima kasih sebagai respons
        echo "Nama: $name<br>No.Tlp: $phone<br>Saran: $message<br><br>";
        echo "Terima kasih atas saran yang anda berikan ";
    } else {
        echo "Error membuka file"; // Mengembalikan respons error jika file tidak dapat dibuka
    }
} else {
    echo "Error: Metode request tidak valid"; // Mengembalikan respons error jika metode request bukan POST
}
?>

