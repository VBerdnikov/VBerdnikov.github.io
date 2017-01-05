<?php

$recepient = "vberdnikovv@gmail.com";
$sitename = "vberdnikov.github.io";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$messager = trim($_GET["message"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nПочта: $email \nСообщение: $messager";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");