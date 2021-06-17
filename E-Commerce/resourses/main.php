<main>

    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/slider/airpods.webp" alt="Airpods">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/slider/iphone_12.webp" alt="Iphone 12">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/slider/samsung_s21.webp" alt="Samsung S21">
            </div>
        </div>
    </div>
    <!-- Carousel -->


    <!-- JBL ad -->
    <section class='speakerShow'>
        <h3 class="display-2">JBL FLIP5</h3>
        <p class="text-muted">Portable waterproof speaker</p>

        <img src="./assets/img/products/jbl_speaker_front.webp" alt="JBL Speaker">
        <div class="bar">
        </div>
    </section>
    <!-- JBL ad -->

    <!-- Discount -->
    <div class="discount container">
        <img src="./assets/img/offers/discount.webp" alt="Discount">
        <img src="./assets/img/offers/loyal_client.webp" alt="Loyal client">
    </div>
    <!-- Discount -->

    <!-- We offer -->
    <?php echo $offerBox; ?>
    <!-- We offer -->


    <section class="products">
        <p class="fs-2 container selectBrand">Select your brand</p> <br>
        <!-- Catagories -->
        <section class="categories container">
            <a href="#" onclick="return false;" class="categoryBox" tabindex="-1">
                <img src="./assets/img/logos/categories_back.webp" alt="allCategories">
            </a>
            <a href="#" onclick="return false;" class="categoryBox" tabindex="-1">
                <img src="./assets/img/logos/samsung.webp" alt="samsung">
            </a>
            <a href="#" onclick="return false;" class="categoryBox" tabindex="-1">
                <img src="./assets/img/logos/huawei_logo.webp" alt="huawei">
            </a>
            <a href="#" onclick="return false;" class="categoryBox" tabindex="-1">
                <img src="./assets/img/logos/apple_logo.webp" alt="apple">
            </a>
            <a href="#" onclick="return false;" class="categoryBox" tabindex="-1">
                <img src="./assets/img/logos/jbl_logo.webp" alt="jbl">
            </a>
        </section>
        <!-- Catagories -->

        <!-- Products -->
        <div class="items container">
            <?php echo importProducts("SELECT * FROM products"); ?>
        </div>
        <!-- Products -->
    </section>

    <!-- User Reviews -->
    <table class="table container my-5 table-bordered">
        <thead>
            <tr class="text-center fs-4 ">
                <th scope="col">User reviews</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div id="commentCarousel" class="carousel container slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item comment active">
                                <div class="comment">
                                    <p class='fs-5 fw-bold'>Joe Berno</p>
                                    <p class='fw-lighter fs-6'>10/10/2010</p>
                                    <div class="commentText">
                                        <p class='fs-6'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem consectetur laborum tempora voluptates illo minus reprehenderit rem provident, iste praesentium assumenda eum ipsam eos quae aliquid sapiente ea optio itaque.</p>
                                    </div>
                                    <p class='fs-5'>&#128522 (Rating 5 of 5)</p>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-black fs-6" data-mdb-toggle="modal" data-mdb-target="#commentsModal">Write a review</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo importReviews(); ?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-mdb-target="#commentCarousel" data-mdb-slide="prev">
                            <span class='text-black fs-1'>
                                <<span>
                                    <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-mdb-target="#commentCarousel" data-mdb-slide="next">
                            <span class='text-black fs-1'>></span>
                            <span class="visually-hidden">Next</span>

                        </button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
    <!-- User Reviews -->

    <!-- Comment modal -->
    <div class="modal fade" id="commentsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel">Write a review</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="range">
                        <input type="range" min="0" max="4" step="1" value=2 class="form-range" id="reviewEmoji" />
                    </div>
                    <label class="form-label text-center emoji fs-1 d-flex justify-content-center" for="reviewEmoji">😍</label>
                    <input type="text" class='form-control my-2' placeholder="Enter name" required name="commentName" maxlength="20" id="commentName">
                    <div class="form-outline">
                        <textarea class="form-control" required maxlength="250" id="comment" rows="4"></textarea>
                        <label class="form-label" for="textAreaExample">Message</label>
                    </div>
                </div>
                <button class="btn btn-black" id='sendComment' data-mdb-dismiss="modal" aria-label="Close">Submit</button>
            </div>
        </div>
    </div>
    <!-- Comment modal -->

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