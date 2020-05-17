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