<main>
    <?php echo $offerBox; ?>
    <section id="product" class="container py-3">
        <div class="tabs">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="tabs" role="tablist">
                <?php echo $tabNav; ?>
            </ul>
            <!-- Tabs navs -->
        </div>
        <div class="tabContent">
            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
                <?php echo $tabContent; ?>
            </div>
            <!-- Tabs content -->
        </div>

        <!-- Info -->
        <section class="productInfo">
            <div class="info">
                <?php echo $info; ?>
                <p class="fs-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem nisi, ab modi atque cum sunt aliquam tenetur soluta tempora beatae! Veritatis ratione non debitis laboriosam hic ipsa similique reiciendis consequatur.</p>
                <button class="btn btn-outline-danger float-right like mx-1">
                    <img src="./assets/img/logos/like.webp" class=likeImg style="max-height:18px;" alt="like">
                </button>
                <?php
                if (isset($_SESSION['id'])) {
                    echo '<button type=submit class="btn btn-info addToCart">Add to Cart</button>';
                } ?>
                <p class="fs-6 py-3 text-muted share">
                    Share with friends
                    <a href="">
                        <img src="assets/img/logos/facebook.webp" alt="facebook">
                    </a>
                    <a href="">
                        <img src="assets/img/logos/instagram.webp" alt="instagram">
                    </a>
                </p>
            </div>
        </section>
        <!-- Info -->
    </section>


    <!-- Toast  -->
    <div class="fixedToast m-2">
        <div class="toast bg-info" role="alert" aria-live="assertive" style="position: absolute; top: 0; right: 0;" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Cart</strong>
                <div class="x-right container d-flex justify-content-end">
                    <button type="button" class="pt-1 ps-2 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            </div>
            <div class="toast-body fs-6 text-white">
                Your item was added to cart !
            </div>
        </div>
    </div>
    <!-- Toast  -->

</main>