<main>
    <!-- Gray bar -->
    <section class="lightBar">
        <h1 class="fs-2 container">Cart</h1>
    </section>
    <!-- Gray bar -->

    <!-- Offer box -->
    <?php echo $offerBox; ?>
    <!-- Offer box -->

    <!-- Cart items -->
    <?php echo exportToCart(); ?>
    <!-- Cart items -->


    <div class="offerTotalBox container">
        <!-- Offer images -->
        <section class="offerImages">
            <div>
                <img src="./assets/img/logos/earth.webp" alt="earth">
                <p class='fs-5 py-2'>Free delivery over 100$</p>
            </div>
            <div>
                <img src="./assets/img/logos/clock.webp" alt="clock">
                <p class='fs-5 py-2'>24/7 Customer support</p>
            </div>
            <div>
                <img src="./assets/img/logos/star.webp" alt="star">
                <p class='fs-5 py-2'>100% Secure checkout</p>
            </div>
            <div>
                <img src="./assets/img/logos/truck.webp" alt="truck">
                <p class='fs-5 py-2'>Easy 30-day Exchanges & Returns</p>
            </div>
        </section>
        <!-- Offer images -->

        <!-- Total box -->
        <table class='table table-bordered'>
            <thead class='table-light'>
                <th colspan='2' class='fs-5'>Cart total</th>
            </thead>
            <tr>
                <td class='fs-6'>
                    Subtotal
                </td>
                <td class='fs-6 subtotal text-success'>
                    0
                </td>
            </tr>
            <tr>
                <td class='fs-6'>Total</td>
                <td class='total text-success fs-6'>0</td>
            </tr>
            <tr>
                <td colspan="2" class='text-center'>
                    <button class="btn btn-info text-uppercase fs-6">Proceed checkout</button>
                    <button class="btn clearCart btn-danger text-uppercase fs-6">X</button>
                </td>
            </tr>
        </table>
        <!-- Total box -->
    </div>


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


</main>