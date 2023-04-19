<?php
session_start();
require 'inc/data/products.php';
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $productId => $quantity) {
                if (isset($catalog[$productId])) {
                    $cookie = $catalog[$productId];
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $productId; ?>.jpg" alt="<?= $cookie['name']; ?>"
                    class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?></h3>
                    <p><?= $cookie['description']; ?></p>
                    <p>Quantity: <?= $quantity; ?></p>
                </figcaption>
            </figure>
        </div>
        <?php
                }
            }
        } else {
            echo '<p class="text-center">Your cart is empty.</p>';
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>