<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WDP - Reset Básico</title>

    <link rel="stylesheet" href="assets/styles/Boot.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap');

        *{
            font-family: 'Open Sans', sans-serif;
        }

        .example{
            padding-bottom: calc(33.33% - 30px);
            background: var(--green);
        }

        .h:hover{
            background: var(--green_h);
        }
        
    </style>

</head>
<body>

    <div class="container">

        <header>
            <h1>Lorem Ipsum has been the industry's standard</h1>

            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>

            <a href="#" title="">Lorem Ipsum has</a>
        </header>

        <img src="https://www.upinside.com.br/uploads/images/2018/10/criando-o-proprio-player-para-reproducao-de-videos-com-a-tag-video-do-html5-1539347403.jpg" alt="" title="" />

        <div class="embed-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/z2bEQFOPWlU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="flex">
            <div class="flex-3 rounded example">Rounded</div>
            <div class="flex-3 radius example">Radius</div>
            <div class="flex-3 transition example h">Transition</div>
        </div>

    </div>

</body>
</html>