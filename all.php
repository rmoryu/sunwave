<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH">

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>😎</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.html'; ?>

    <!-- sidebar button -->
    <?php include 'sidebar.html'; ?>

    <!-- aside -->
    <section id="aside">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main -->
    <section id="main">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="goods-container content">
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/glasses_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.html'; ?>
</body>

<!-- javascript -->
<script src="./js/script.js" crossorigin="anonymous"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a9ac565d46.js" crossorigin="anonymous"></script>

</html>