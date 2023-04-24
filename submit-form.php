<?php

// preia datele din formular
$name = $_POST['name'];// preia numele din inputul cu id-ul "name" din formular
$email = $_POST['email'];// preia adresa de email din inputul cu id-ul "email" din formular
$subject = $_POST['subject'];// preia subiectul din inputul cu id-ul "subject" din formular
$message = $_POST['message']; // preia mesajul din textarea-ul cu id-ul "message" din 

// creează un șir de caractere cu datele preluate
$data = "Nume: " . $name . "\r\n" .// concatenează numele cu textul "Nume:"
        "Email: " . $email . "\r\n" .// concatenează adresa de email cu textul "Email:"
        "Subiect: " . $subject . "\r\n" . // concatenează subiectul cu textul "Subiect:"
        "Mesaj: " . $message . "\r\n" .// concatenează mesajul cu textul "Mesaj:"
        "-------------------------\r\n";// adaugă un separator între înregistrări

// deschide fișierul txt pentru a scrie datele în el
$file = fopen('form-data.txt', 'a');// deschide fișierul în modul "append", adică datele vor fi adăugate la sfârșitul fișierului existent

// scrie datele în fișier
fwrite($file, $data);

// închide fișierul txt
fclose($file);

// redirecționează utilizatorul înapoi la pagina formularului
header('Location: FirstPage.html');// redirecționează utilizatorul către pagina "FirstPage.html"
exit;// oprește executarea scriptului
?>