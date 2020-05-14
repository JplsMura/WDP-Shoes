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

            <!--            NAV_LOGO-->
            <div class="main_header_nav_logo">
                <a href="" title="WdpShoes | Home">
                    <img alt="" title="" src="Themes/WdpShoes/Images/wdpshoes_logo_white.png"/>
                </a>
            </div>

            <!--            SEARCH NAV-->
            <div class="main_header_nav_search">
                <form action="" method="post" class="radius">
                    <input type="text" name="s" placeholder="Pesquisar na WdpShoes:"/>
                    <button class="icon-search icon-notext transition"></button>
                </form>
            </div>

            <!--            MENU USER E CARRINHO-->
            <div class="main_header_nav_menu">
                <a href="#" class="icon-cart icon-notext transition main_header_nav_menu_cart"><span>3</span></a>
                <div class="main_header_nav_menu_user">
                    <a href="#" title="" class="icon-users main_header_nav_menu_user_a radius transition">Minha Conta</a>
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

    <!--    SLIDERS-->
    <main class="main_content">

        <div class="main_content_slide j_slide">
            <a href="#" class="j_slide_item" title=""><img src="Uploads/featured-01.jpg" alt="" title=""/></a>
            <a href="#" class="j_slide_item" title=""><img src="Uploads/featured-02.jpg" alt="" title=""/></a>
            <a href="#" class="j_slide_item" title=""><img src="Uploads/featured-03.jpg" alt="" title=""/></a>

            <div class="j_slide_nav"></div>

        </div>

        <div class="j_slide_nav">

        </div>

    </main>

    <section class="pdt_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">
                    Ofertas da Semana:
                </h1>
            </header>
            
            <div class="flex">
                <div class="pdt_gallery_list pdt_gallery_featured">
                    <article class="pdt_gallery_item flex-2">
                        <a href="#" alt="" title=""><img alt="" title="" src="Uploads/products/06.jpg"/></a>

                        <header class="pdt_gallery_item_desc">
                            <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" alt="" title="">Calça Confort Mama Latina</a></h2>
                            <div class="pdt_gallery_item_desc_price">
                                <p><b>R$ 59,90</b> <span>R$ 99,99</span></p>
                            </div>
                            <p>2x R$ 29,95</p>
                        </header>
                    </article>
                </div>

                <div class="pdt_gallery_list flex">
                    <?php
                    $pdt = 0;
                    for($pdt = 1; $pdt < 5; $pdt++){
                        ?>
                        <article class="pdt_gallery_item flex-2">
                            <a href="#" alt="" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a>

                            <header class="pdt_gallery_item_desc">
                                <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" alt="" title="">Calça Confort Mama Latina</a></h2>
                                <div class="pdt_gallery_item_desc_price">
                                    <p><b>R$ 59,90</b> <span>R$ 99,99</span></p>
                                </div>
                                <p>2x R$ 29,95</p>
                            </header>
                        </article>
                        <?php
                    }
                    ?>
                </div>
            </div>
            
            <div class="pdt_gallery_normalize">
                <img class="pdt_gallery_item pdt_gallery_banner" src="Uploads/featured-01.jpg" alt="">
            </div>

            <div class="pdt_gallery_normalize flex">
                <?php
                $pdt = 0;
                for($pdt = 5; $pdt < 9; $pdt++){
                    ?>
                    <article class="pdt_gallery_item flex-2">
                        <a href="#" alt="" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a>

                        <header class="pdt_gallery_item_desc">
                            <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" alt="" title="">Calça Confort Mama Latina</a></h2>
                            <div class="pdt_gallery_item_desc_price">
                                <p><b>R$ 59,90</b> <span>R$ 99,99</span></p>
                            </div>
                            <p>2x R$ 29,95</p>
                        </header>
                    </article>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!--    TABS ELES E ELAS-->
    <section class="pdt_gallery pdt_select">
        <div class="container">
            <header class="pdt_select_header">
                <h1>
                    <span class="j_tabs_nav transition radius">Eles</span>
                    <span class="j_tabs_nav transition radius">Elas</span>
                </h1>
            </header>

            <div class="j_tabs">
                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <article class="pdt_gallery_item flex-2">
                                <a href="#" title=""><img alt="" title="" src="Uploads/products/15.jpg"/></a>
                                <header class="pdt_gallery_item_desc">
                                    <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="">Calça Moletom Confort Mama Latina</a></h2>
                                    <div class="pdt_gallery_item_desc_price">
                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                    </div>
                                    <p>2x R$ 29,95</p>
                                </header>
                            </article>
                        </div>
                        <div class="pdt_gallery_list flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 11; $pdt < 15; $pdt++) {
                                ?>
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <article class="pdt_gallery_item flex-2">
                                <a href="#" title=""><img alt="" title="" src="Uploads/products/09.jpg"/></a>
                                <header class="pdt_gallery_item_desc">
                                    <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="">Calça Moletom Confort Mama Latina</a></h2>
                                    <div class="pdt_gallery_item_desc_price">
                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                    </div>
                                    <p>2x R$ 29,95</p>
                                </header>
                            </article>
                        </div>
                        <div class="pdt_gallery_list flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 5; $pdt < 9; $pdt++) {
                                ?>
                                <article class="pdt_gallery_item flex-2">
                                    <a href="#" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a>
                                    <header class="pdt_gallery_item_desc">
                                        <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="">Calça Moletom Confort Mama Latina</a></h2>
                                        <div class="pdt_gallery_item_desc_price">
                                            <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                        </div>
                                        <p>2x R$ 29,95</p>
                                    </header>
                                </article>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="main_footer">
    <div class="container">

        <!--        FORM DESCONTO-->
        <article class="main_footer_optin">
            <header class="main_footer_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Informe seu melhor e-mail logo abaixo e receba um cupom com 20% de desconto para sua primeira compra!</p>
            </header>
            <form action="" method="post" class="main_footer_optin_form">
                <input class="radius" type="email" name="email" placeholder="Informer seu e-mail:"/>
                <button class="btn radius transition icon-mail">Quero meu desconto !</button>
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
                <a href="#" title="" class="icon-facebook icon-notext transition"></a>
                <a href="#" title="" class="icon-instagram icon-notext transition"></a>
                <a href="#" title="" class="icon-youtube icon-notext transition"></a>
            </nav>
        </div>
    </div>
</footer>

<script src="Assets/jquery.js"></script>
<script src="Assets/scripts.js"></script>
</body>
</html>
