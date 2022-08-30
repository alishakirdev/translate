<?php 

 return [
     "shop-order-payment" => [
     "title" => "Prihvatite plaćanje",
     "sample" => "Vaša uplata od 267$ je uspješno podmirena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše prodavnice</b> .<br> Selldone",
     "body" => "Vaša :param2 uplata je uspješno podmirena. Redoslijed: :param1 Hvala, :param3. Selldone",
],
     "shop-order-payment-admin" => [
     "title" => "Prihvatite plaćanje",
     "sample" => "Nova uplata od 267$ uspješno podmirena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše prodavnice</b> .<br> Selldone",
     "body" => "Nova :param2 uplata uspješno podmirena. Redoslijed: :param1 Hvala, :param3. Selldone",
],
     "shop-login" => [
     "title" => "Kod za potvrdu prijave",
     "sample" => "Vaš kod za prijavu je: <b>123456</b><br> <b>Ime vaše prodavnice</b><br> Selldone",
     "body" => "Vaš kod za prijavu je: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Poruka o uspješnoj prijavi",
     "sample" => "Poštovani <b>Ime</b> ,<br> Prijavili ste se na svoj nalog putem <b>iPhone-a 165.250.300.1 08.05.2021</b> . u <b>9:14</b> .<br> Selldone",
     "body" => "Poštovani :param1, Prijavili ste se na svoj nalog pomoću :param2 na :param3. Selldone",
],
     "avocado-order-submit" => [
     "title" => "Avokado nova narudžba poslata pošaljite kupcu",
     "sample" => "<b>Ime vaše prodavnice</b><br> drago <b>tvoje ime</b> ,<br> Primili smo vašu narudžbu i pregledavamo je.<br> Broj narudžbe: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Poštovani :param1, primili smo vašu narudžbu i pregledavamo je. Narudžba #: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado primi novu narudžbu pošalji prodavcu",
     "sample" => "Dobili ste narudžbu avokada:<br> Prodavnica: <b>Ime vaše trgovine</b><br> Kupac: <b>Ime kupca</b><br> Narudžba: <b>AVO-246</b><br> Selldone",
     "body" => "Primili ste narudžbu avokada: Prodavnica: :param1 Kupac: :param2 Narudžba: :param3 Prodato",
],
     "avocado-ready-to-pay" => [
     "title" => "Narudžba avokada spremna za plaćanje",
     "sample" => "<b>Ime vaše prodavnice</b><br> Vaša narudžba je potvrđena i može se platiti putem sljedećeg linka.<br> Broj narudžbe: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
     "body" => ":param3 Vaša narudžba je potvrđena i može se platiti putem sljedećeg linka. Broj narudžbe: :param2 Link: :param1 Prodato",
],
];