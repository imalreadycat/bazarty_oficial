<?php
function conn() {
    
    $local= "biblioteca/manipulacao/local.csv";
    $servidor= "biblioteca/manipulacao/servidor.csv";
    
    $arquivo= $local;
        $file= fopen ($arquivo, 'r');
                $linha= fgets($file);
                $dados= explode(',', $linha);
                fclose($file);
                
         $server= $dados[0];
         $usuario= $dados[1];
         $senha= $dados[2];
         $database= $dados[3];
    
    $cnx = mysqli_connect("localhost","root", "", "bazarty");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}