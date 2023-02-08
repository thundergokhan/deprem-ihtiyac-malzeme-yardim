<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $isim = mysqli_real_escape_string($conn, $_POST["isim"]);
  $soyisim = mysqli_real_escape_string($conn, $_POST["soyisim"]);
  $telefon = mysqli_real_escape_string($conn, $_POST["telefon"]);
  $adres = mysqli_real_escape_string($conn, $_POST["adres"]);
  $yardimTuru = mysqli_real_escape_string($conn, $_POST["yardimTuru"]);

  $servername = "localhost:3306";
  $username = "root";
  $password = "12345";
  $dbname = "deprem_yardim_ihtiyac";

  // Veritabanı bağlantısı oluştur
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verileri veritabanına kaydet
  $sql = "INSERT INTO yardim_formu (isim, soyisim, telefon, adres, yardimTuru)
VALUES ('$isim', '$soyisim', '$telefon', '$adres', '$yardimTuru')";

  if (mysqli_query($conn, $sql)) {
    echo "Veriler veritabanına başarıyla kaydedildi.";
  } else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
