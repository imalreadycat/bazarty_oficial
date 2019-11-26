<html>
    <head>
        <title>Bazarty</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="./publico/css/semantic.min.css">
        <link rel="stylesheet" href="./publico/css/semantic.js">       
        <link rel="stylesheet" href="./publico/css/semantic.min.css.url">
        <link rel="stylesheet" type="text/css" href="semantic.min.js.url">
	<link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="./publico/css/detalhes.css">
	<link rel="stylesheet" type="text/css" href="detalhes.css">
	<link rel="shortcut icon" type="image/x-png" href="./publico/img/logo/logo2.png">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="./publico/css/app.css">
        <style>
            .mySlides {display:none;}
        </style>


    </head>
    <body class="container">
        <?php include ('cabecalho.php'); ?>
        

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

        <?php include ('rodape.php'); ?>
    </body>
</html>
