<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2020-04-20T07:03:21-03:00+171174">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>WdpShoes | Home</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Styles/Icons.css"/>
<!--    <link href="https://file.myfontastic.com/rAgByRoZ99iS7bHZ5ZXNwh/icons.css" rel="stylesheet">-->
    <link rel="stylesheet" href="Assets/Styles/Boot.css"/>
    <link rel="stylesheet" href="Themes/WdpShoes/Style.css"/>
    <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png"/>

</head>
<body>
<header class="main_header">
    <div class="container">
        <div class="main_header_nav">
            <div class="main_header_nav_logo">
                <a href="" title="WdpShoes | Home">
                    <img alt="" title="" src="Themes/WdpShoes/Images/wdpshoes_logo_white.png"/>
                </a>
            </div>
            <div class="main_header_nav_search">
                <form action="" method="post" class="radius">
                    <input type="text" name="s" placeholder="Pesquisar na WdpShoes:"/>
                    <button class="icon-search icon-notext transition"></button>
                </form>
            </div>
            <div class="main_header_nav_menu">
                <a href="#" class="icon-cart icon-notext transition main_header_nav_menu_cart"><span>3</span></a>
                <div class="main_header_nav_menu_user">
                    <a href="#" title="" class="icon-user main_header_nav_menu_user_a radius transition">Minha Conta</a>
                    <nav class="radius">
                        <a href="#" title="">Meus pedidos</a>
                        <a href="#" title="">Meus dados</a>
                        <a href="#" title="">Meus endereços</a>
                        <a href="#" title="">Sair</a>
                    </nav>
                </div>
            </div>
        </div>

        <ul class="main_header_departments">
            <?php
            for ($i = 1; $i < 6; $i++) {
                ?>
                <li class="main_header_departments_li">Departamento <?= $i; ?>
                    <ul class="main_header_departments_li_ul">
                        <?php
                        for ($ii = 1; $ii < 6; $ii++) {
                            ?>
                            <li class="main_header_departments_li_ul_li"><a title="" href="#">Categoria <?= "{$i}/{$ii}"; ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</header>

<main class="main_content">
    <section class="pdt_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">
                    Ofertas da Semana:
                </h1>
            </header>
        </div>
    </section>
</main>

<footer class="main_footer">
    <div class="container">

        <!--        FORM DESCONTO-->
        <article class="main_footer_optin">
            <header class="main_foot_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Informe seu melhor e-mail logo abaixo e receba um cupom com 20% de desconto para sua primeira compra!</p>
            </header>
            <form action="" method="post" class="main_footer_optin_form">
                <input type="email" name="email" placeholder="Informer seu e-mail:"/>
                <button class="btn radius transition icon-mail">Quero meu desconto!</button>
            </form>
        </article>

        <!--        MENUS RODAPÉ-->
        <div class="main_footer_nav flex">
            <?php
                for($m = 1; $m < 4; $m++){
                ?>
                    <nav class="flex-4">
                        <h4>Nome do Menu <?= $m ?></h4>
                        <?php
                            for($mm = 1; $mm < 6; $mm++){
                                ?>
                                <a href="#" title="">Link de rodapé <?= "{$m}/{$mm}"; ?></a>
                                <?php
                            }
                        ?>
                    </nav>
                <?php
                }
            ?>

            <!--            PAGAMENTOS-->
            <nav class="flex-4">
                <h4>Pagamento seguro:</h4>
                <ul class="main_footer_nav_pays flex">
                    <li class="flex-4"><img src="Assets/Cards/mastercard.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/visa.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/aura.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/dinners.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/amex.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/hiper.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/elo.png" alt="" title=""></li>
                    <li class="flex-4"><img src="Assets/Cards/discover.png" alt="" title=""></li>
                </ul>
            </nav>

        </div>

    </div>

    <div class="main_footer_bottom">

        <div class="container flex">

            <!--            COPY-->
            <div class="main_footer_bottom_copy">
                <img src="Themes/WdpShoes/images/wdpshoes_logo_black.png" alt="WdpShoes" title="WdpShoes">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>

            <!--            ICONES DE REDES SOCIAIS-->
            <nav class="main_footer_bottom_social">
                <a href="#" title="" class="icon-facebook icon-notext"></a>
                <a href="#" title="" class="icon-instagram icon-notext"></a>
                <a href="#" title="" class="icon-youtube icon-notext"></a>
            </nav>

        </div>

    </div>
    
</footer>

<script src="Assets/jquery.js"></script>
<script src="Assets/scripts.js"></script>
</body>
</html>
