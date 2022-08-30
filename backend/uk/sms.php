<?php 

 return [
     "shop-order-payment" => [
     "title" => "Прийняти оплату",
     "sample" => "Ваш платіж у розмірі 267 доларів успішно здійснено.<br> Замовлення: SM-425<br> Дякую, <b>назва вашого магазину</b> .<br> Продано",
     "body" => "Ваш платіж :param2 успішно здійснено. Замовлення: :param1 Дякую, :param3. Продано",
],
     "shop-order-payment-admin" => [
     "title" => "Прийняти оплату",
     "sample" => "Новий платіж у розмірі 267$ успішно проведено.<br> Замовлення: SM-425<br> Дякую, <b>назва вашого магазину</b> .<br> Продано",
     "body" => "Новий :param2 платіж успішно здійснено. Замовлення: :param1 Дякую, :param3. Продано",
],
     "shop-login" => [
     "title" => "Код підтвердження входу",
     "sample" => "Ваш код входу: <b>123456</b><br> <b>Назва вашого магазину</b><br> Продано",
     "body" => "Ваш код входу: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Повідомлення про успішний вхід",
     "sample" => "Шановне <b>ім'я</b> ,<br> Ви ввійшли у свій обліковий запис за допомогою <b>iPhone 165.250.300.1</b> о 08.05.2021 о <b>9:14</b> .<br> Продано",
     "body" => "Шановний :param1! Ви ввійшли у свій обліковий запис через :param2 за адресою :param3. Продано",
],
     "avocado-order-submit" => [
     "title" => "Нове замовлення на авокадо надіслано покупцеві",
     "sample" => "<b>Назва вашого магазину</b><br> Дороге <b>Ваше ім'я</b> ,<br> Ми отримали ваше замовлення і розглядаємо його.<br> Номер замовлення: <b>AVO-246</b><br> Продано",
     "body" => ":param3 Шановний :param1! Ми отримали ваше замовлення та розглядаємо його. Замовлення №: :param2 Продаж",
],
     "avocado-order-submit-seller" => [
     "title" => "Авокадо отримує нове замовлення, надсилає продавцю",
     "sample" => "Ви отримали замовлення авокадо:<br> Магазин: <b>назва вашого магазину</b><br> Покупець: <b>Ім'я покупця</b><br> Замовлення: <b>АВО-246</b><br> Продано",
     "body" => "Ви отримали замовлення на авокадо: Магазин: :param1 Покупець: :param2 Замовлення: :param3 Продано",
],
     "avocado-ready-to-pay" => [
     "title" => "Замовлення авокадо готове до оплати",
     "sample" => "<b>Назва вашого магазину</b><br> Ваше замовлення підтверджено, його можна оплатити за посиланням.<br> Номер замовлення: <b>AVO-246</b><br> Посилання: <b>https://your-domain/avocado</b><br> Продано",
     "body" => ":param3 Ваше замовлення підтверджено, його можна оплатити за наступним посиланням. Номер замовлення: :param2 Посилання: :param1 Продано",
],
];