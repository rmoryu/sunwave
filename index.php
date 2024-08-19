<?php
// 測試資料庫有沒有連結成功
include("./data_php/connect_test.php");
$seldb = mysqli_select_db($db_link, "sunwave");

if (!$seldb) die("<h1>失敗了嗚嗚嗚</h1>");

$sql_query = "SELECT * FROM pyclass";
$result = mysqli_query($db_link, $sql_query);
$total_records = $result->num_rows;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>😎</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.html'; ?>

    <!-- cover -->
    <section class="cover">
        <div class="info 1">
            <h1>WELCOME</h1>
        </div>
        <div class="background-hashtags 0">
            <div class="hashtags-area">
                <p>#FASHIONFORWARD</p>
                <P>#TRENDSETTER</P>
                <P>#STYLEREVOLUTION</P>
                <P>#WEARABLEART</P>
                <p>#OOTD</p>
                <p>#STYLESPECTRUM</p>
            </div>
            <div class="hashtags-area">
                <P>#CHIVIBES</P>
                <P>#URBANELEGANCE</P>
                <P>#STREETWEARSAVVY</P>
                <P>#OUTFITINSPO</P>
                <P>#FASHIONFRENZY</P>
                <P>#HAUTEHAVEN</P>
            </div>
            <div class="hashtags-area">
                <p>#MODERNMODA</p>
                <p>#FRESHTHREADS</p>
                <p>#VOGUEVANGUARD</p>
                <p>#EDGYELEGANCE</p>
                <p>#CONTEMPORARYCHIC</p>
                <p>#FASHIONFUSION</p>
            </div>
            <div class="hashtags-area">
                <p>#TRENDTRAILBLAZER</p>
                <p>#INNOVATIVESTYLE</p>
                <p>#CUTTINGEDGECLOTHES</p>
                <p>#SARTORIALSPLENDOR</p>
                <p>#NEXTGENFASHION</p>
                <p>#AVANTGARDEAPPAREL</p>
            </div>
        </div>
        <div class="background-brand-logo 0">
            <img src="./images/brand/sunwave_logo.png" alt="">
        </div>
        <div class="model 1">
            <img src="./images/model_001.png" alt="">
        </div>
    </section>

    <div class="block">
        <div>
            <p>START NOW</p>
        </div>
    </div>

    <!-- new -->
    <section class="index new">
        <div class="title">
            <h2>Weekly New Products</h2>
        </div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="content">
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
                                <img src="./images/glasses_002.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/glasses_003.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/glasses_004.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/glasses_005.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="content">
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/shoes_001.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/shoes_002.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/shoes_003.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/shoes_004.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/shoes_005.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="content">
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/bag_001.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/bag_002.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/bag_003.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/bag_004.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                        <a href="#" class="card">
                            <div class="items">
                                <img src="./images/bag_005.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>lorem</p>
                                <h6 class="price">$$$</h6>
                                <button><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- mag -->
    <!-- <section class="mag">
        <div class="marquee-area">
            <a href="#">
                <img src="./images/poster_001.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_002.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_003.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_004.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_005.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_006.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_007.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_008.jpg" alt="">
                <h3>TITLE</h3>
            </a> -->
    <!-- 無縫滾動 -->
    <!-- <a href="#">
                <img src="./images/poster_001.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_002.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_003.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_004.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_005.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_006.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_007.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_008.jpg" alt="">
                <h3>TITLE</h3>
            </a>
        </div>
        <div class="marquee-area">
            <a href="#">
                <img src="./images/poster_001.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_002.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_003.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_004.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_005.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_006.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_007.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_008.jpg" alt="">
                <h3>TITLE</h3>
            </a> -->
    <!-- 無縫滾動 -->
    <!-- <a href="#">
                <img src="./images/poster_001.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_002.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_003.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_004.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_005.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_006.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_007.jpg" alt="">
                <h3>TITLE</h3>
            </a>
            <a href="#">
                <img src="./images/poster_008.jpg" alt="">
                <h3>TITLE</h3>
            </a>
        </div>
    </section> -->



    <!-- topic -->
    <section class="index topic">
        <div class="title">
            <h2>Topic</h2>
        </div>
        <div class="content">
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/topic_001.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/topic_002.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/topic_003.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/topic_004.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
            <a href="#" class="card">
                <div class="items">
                    <img src="./images/topic_005.jpg" alt="">
                </div>
                <div class="info">
                    <p>lorem</p>
                    <h6 class="price">$$$</h6>
                    <button><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </a>
        </div>
    </section>

    <!-- ads -->
    <section class="ads">
        <a href="#">
            <button>BUY<i class="fa-solid fa-arrow-right"></i></button>
            <img src="./images/landscape_001.jpg" alt="">
            <h3>Heading</h3>
        </a>
    </section>

    <!-- special -->
    <section class="index special">
        <div class="title">
            <h2>Special Design</h2>
        </div>
        <?php
        $maxRows_rs = 12;
        $pageNum_rs = 0;
        if (isset($_GET['pageNum_rs'])) {
            $pageNum_rs = $_GET['pageNum_rs'];
        }
        $startRows_rs = $pageNum_rs * $maxRows_rs;

        $queryFirst = sprintf("SELECT * FROM product, product_img WHERE p_open = 1 AND product_img.sort = 1 ORDER BY product.p_id DESC", $maxRows_rs);
        $query = sprintf("%s LIMIT %d, %d", $queryFirst, $startRows_rs, $maxRows_rs);
        $pList01 = $db_link->query($query);
        $i = 1;
        ?>

        <?php while ($pList01_Rows = $pList01->fetch_assoc()) { ?>
            <?php if ($i % 4 == 1) { ?> <div class="content"> <?php } ?>
                <!-- <div class="content"> -->
                <a href="#" class="card">
                    <div class="items">
                        <img src="./images/women_001.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>lorem</p>
                        <h6 class="price">$$$</h6>
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </a>
                <a href="#" class="card">
                    <div class="items">
                        <img src="./images/<?php echo $pList01_Rows['img_file']; ?>" title="<?php echo $pList01_Rows['p_name']; ?>">
                    </div>
                    <div class="info">
                        <p>lorem</p>
                        <h6 class="price">$$$</h6>
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </a>
                <?php if ($i % 4 == 0 || $i == $pList01->rowCount()) { ?>
                </div><?php } ?>
            </div>
        <?php $i++;
        } ?>
    </section>

    <!-- footer -->
    <?php include 'footer.html'; ?>

</body>
<!-- javascript -->
<script src="./js/script.js" crossorigin="anonymous"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a9ac565d46.js" crossorigin="anonymous"></script>

</html>