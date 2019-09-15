<?php
function conn() {
    $cnx = mysqli_connect("localhost","root", "", "bazarty");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}