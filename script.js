//form verilerinin doğruluğunu kontrol etmek için
const form = document.querySelector("form");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const isim = document.querySelector("#isim").value;
  const soyisim = document.querySelector("#soyisim").value;
  const telefon = document.querySelector("#telefon").value;
  const adres = document.querySelector("#adres").value;
  const yardimTuru = document.querySelector("#yardimTuru").value;

  if (!isim || !soyisim || !telefon || !adres || !yardimTuru) {
    alert("Lütfen tüm alanları doldurun!");
    return;
  }

  if (!isValidPhoneNumber(telefon)) {
    alert("Lütfen geçerli bir telefon numarası girin!");
    return;
  }

  form.submit();
});

function isValidPhoneNumber(phoneNumber) {
  const regex = /^\d{10,11}$/;
  return regex.test(phoneNumber);
}
<form action="submit.php" method="post"></form>;
