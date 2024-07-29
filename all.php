<?php
// 測試資料庫有沒有連結成功
include("./data_php/connect_test.php");
$seldb = mysqli_select_db($db_link, "sunwave");

// 如果沒有就顯示下列訊息
// 方法一
// if (!$seldb) {
//     die("失敗ㄌ嗚嗚嗚<br><br>");
// } else {
//     // 如果成功了就顯示下列訊息
//     echo "成功了好欸<br><br>";
// }
// 方法二
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH">

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
        <!-- top level -->
        <?php
        $SQLstring = "SELECT * FROM pyclass WHERE level = 1 ORDER BY sort";
        $pyclass01 = $db_link->query($SQLstring);
        $i = 1;
        ?>
        <div class="accordion" id="accordionExample">
            <?php while ($pyclass01_Rows = $pyclass01->fetch_assoc()) { ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headerOne<?php echo $i; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>">
                            <?php echo $pyclass01_Rows['cname']; ?>
                        </button>
                    </h2>

                    <!-- second level -->
                    <?php
                    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level = 2 AND uplink = %d ORDER BY sort", $pyclass01_Rows['classid']);
                    $pyclass02 = $db_link->query($SQLstring);
                    ?>
                    <div id="collapseOne<?php echo $i; ?>" class="second-level accordion-collapse collapse <?php echo ($i == 2) ? 'show' : ''; ?>" aria-labelledby="headingOne<?php echo $i; ?>" data-bs-parent="#accordionExample">
                        <hr>
                        <div class="accordion-body">
                            <?php while ($pyclass02_Rows = $pyclass02->fetch_assoc()) { ?>
                                <a href="#"><?php echo $pyclass02_Rows['cname']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php $i++;
            } ?>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a9ac565d46.js" crossorigin="anonymous"></script>

</html>