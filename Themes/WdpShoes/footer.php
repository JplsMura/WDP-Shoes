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