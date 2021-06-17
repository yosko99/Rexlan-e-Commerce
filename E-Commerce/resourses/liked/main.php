<main>

    <!-- Gray bar -->
    <section class="lightBar">
        <h1 class="fs-2 container">Liked</h1>
    </section>
    <!-- Gray bar -->

    <!-- Offer box -->
    <?php echo $offerBox; ?>
    <!-- Offer box -->

    <!-- Liked items -->
    <div class="items container">
        <?php
        if (isset($_SESSION["like"])) {
            $arr = explode(",", $_SESSION["like"]);
            if ($arr[0] != 'null') {
                foreach ($arr as $key) {
                    $query = "SELECT * FROM products WHERE thumbnail='" . mysqli_real_escape_string($GLOBALS["db"], $key) . "'";
                    echo importProducts($query);
                }
            }
        }
        ?>
    </div>

    <?php $arr = explode(",", $_SESSION["like"]);
    if ($arr[0] == 'null') {
        echo "
            <div class='d-flex text-center justify-content-center'>
                <button class='btn btn-light fs-6 disabled'>You dont have liked items</button>
            </div>'";
    } ?>
    <!-- Liked items -->

    <!-- Accordion -->
    <div class="accordion accordion-flush container" id="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Can i return or exchange my order?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-mdb-parent="#accordion">
                <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cupiditate sed quod nihil voluptate itaque quae culpa sequi rerum minus enim, eligendi obcaecati saepe, quam voluptatum excepturi! Esse, quos?
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Do i have to pay taxes, or duties in my order?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-mdb-parent="#accordion">
                <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cupiditate sed quod nihil voluptate itaque quae culpa sequi rerum minus enim, eligendi obcaecati saepe, quam voluptatum excepturi! Esse, quos?
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed text-uppercase" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    How much does shipping cost?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-mdb-parent="#accordion">
                <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque consectetur cupiditate sed quod nihil voluptate itaque quae culpa sequi rerum minus enim, eligendi obcaecati saepe, quam voluptatum excepturi! Esse, quos?
                </div>
            </div>
        </div>
    </div>
    <!-- Accordion -->


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