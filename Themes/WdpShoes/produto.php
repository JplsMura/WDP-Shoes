<main class="main_content">
    <div class="container">
        <article class="main_product">
            <div class="main_product_gallery">

                <!--                LISTA DE IMAGENS LATERAIS-->
                <ul class="main_product_gallery_list">
                    <?php
                        for($img = 1; $img < 5; $img++){
                            $active  = ($img == 1 ? "active" : "");
                            ?>
                                <li class="radius transition <?= $active; ?> j_gallery_item">
                                    <img src="<?= $configBase; ?>/Uploads/products/16-<?= $img; ?>.jpg" alt="" title="">
                                </li>
                            <?php
                        }
                    ?>
                </ul>

                <!--                IMG PRINCIPAL-->
                <div class="main_product_gallery_cover">
                    <img class="radius j_gallery_home" src="<?= $configBase; ?>/Uploads/products/16-1.jpg" alt="" title="">
                </div>

            </div>

            <!--            CHECKOUT-->
            <div class="main_product_checkout">
                Checkout;
            </div>
        </article>
    </div>
</main>