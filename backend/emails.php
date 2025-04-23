<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    // Coletar Dados
    $nome=htmlspecialchars($_POST["nome"]);
    $contato=htmlspecialchars($_POST["contato"]);
    $email=htmlspecialchars($_POST["email"]);
}