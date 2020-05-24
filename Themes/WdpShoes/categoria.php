<main class="main_content">
    <div class="container main_category">

        <section class="main_category_products">

            <header class="main_category_products_header">
                <h1>Nome da categoria</h1>

                <form action="" method="get">
                    <p>Ordenar por:</p>

                    <select name="" id="">
                        <option value="">Mais Vendidos</option>
                        <option value="">Ofertas Especiais</option>
                        <option value="">Lançamentos</option>
                        <option value="">Menor Preço</option>
                        <option value="">Maior Preço</option>
                    </select>
                </form>
            </header>

            <div class="main_category_products_content">
                <?php
                    for($pdt = 1; $pdt < 16; $pdt++){
                        require "{$configThemePath}/Templates/product.php";
                    }
                ?>
            </div>

            <nav class="main_category_products_paginator">
                <a href="#" class="radius transition active">1</a>
                <a href="#" class="radius transition">2</a>
                <a href="#" class="radius transition">3</a>
                <a href="#" class="radius transition">4</a>
                <a href="#" class="radius transition">5</a>
            </nav>
        </section>

        <aside class="main_category_sidebar">
            <h2 class="main_category_sidebar_title">Filtar resultados:</h2>
            <?php
                for($m = 1; $m < 4; $m++){
                    ?>
                        <nav class="main_category_sidebar_widget">
                            <h3 class="main_category_sidebar_widget_title">Menu de filtros:</h3>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                                <a href="#" class="transition radius">Filtro (tamanho/cor/etc)</a>
                        </nav>
                    <?php
                }
            ?>
        </aside>

    </div>
</main>