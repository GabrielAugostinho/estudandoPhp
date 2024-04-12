<?php 

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use B\Client;

    $c = new Client();
    print_r($c);
    echo $c->__get("nome");



?>