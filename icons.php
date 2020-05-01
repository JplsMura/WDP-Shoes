<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WDP: icones, link e botões</title>
    <link rel="stylesheet" href="assets/styles/Boot.css">
    <link rel="stylesheet" href="assets/styles/Icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap');

         *{
            font-family: 'Open Sans', sans-serif;
        }

        .box{
            display: flex;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .box_container{
            width: 600px;
            margin: auto;
            padding: 0 20px 20px 20px;
            background: #fbfbfb;
        }

        .box_container h1{
            margin: 20px 0 10px 0;
        }

    </style>
</head>
<body>

    <div class="box">
        <div class="class box_container">
            <h1>Ícones:</h1>
                <p class="icon-facebook">Facebook</p>
                <p class="icon-instagram">Instagram</p>
                <p class="icon-youtube">YouTube</p>
                <p class="icon-search">Pesquisar</p>

            <h1>Link:</h1>
                <p><a title="" href="#">Link1</a></p>
                <p><a title="" href="#" class="icon-facebook">Link2</a></p>

            <h1>Botões:</h1>
                <a class="btn radius" title="" href="#"> Link Button</a>
                <button class="btn radius transition">Button</button>
                <span class="btn radius transition icon-search">Span Button </span>

            <h1>Tamanhos</h1>
                <a class="btn radius btn-small" title="" href="#"> Link Button</a>
                <a class="btn radius" title="" href="#"> Link Button</a>
                <a class="btn radius btn-big" title="" href="#"> Link Button</a>

            <h1>Cores: Verde</h1>
            <span class="btn btn-green radius transition icon-search">Span Button </span>
            <span class="btn btn-green-out radius transition icon-search">Span Button </span>

            <h1>Cores: Amarelo</h1>
            <span class="btn btn-yellow radius transition icon-search">Span Button </span>
            <span class="btn btn-yellow-out radius transition icon-search">Span Button </span>

            <h1>Cores: Vermelho</h1>
            <span class="btn btn-red radius transition icon-search">Span Button </span>
            <span class="btn btn-red-out radius transition icon-search">Span Button </span>

            <h1>Cores: Azul</h1>
            <span class="btn btn-blue radius transition icon-search">Span Button </span>
            <span class="btn btn-blue-out radius transition icon-search">Span Button </span>
        </div>
    </div>

</body>
</html>
