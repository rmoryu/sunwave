<?php
// 測試資料庫有沒有連結成功
include("./data_php/connect_test.php");
$seldb = mysqli_select_db($db_link, "sunwave");

if (!$seldb) die("<h1>失敗了嗚嗚嗚</h1>");

$sql_query = "SELECT * FROM pyclass";
$result = mysqli_query($db_link, $sql_query);
$total_records = $result->num_rows;
?>
<?php (!isset($_SESSION)) ? session_start() : "";  ?>
<?php require_once("php_lib.php"); ?>
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

    <!-- carousel -->
    <?php // include 'carousel.php'; 
    ?>

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
                    <div id="collapseOne<?php echo $i; ?>" class="second-level accordion-collapse collapse <?php echo ($i == 1) ? 'show' : ''; ?>" aria-labelledby="headingOne<?php echo $i; ?>" data-bs-parent="#accordionExample">
                        <hr>
                        <div class="accordion-body">
                            <?php while ($pyclass02_Rows = $pyclass02->fetch_assoc()) { ?>
                                <a href="?classid=<?php echo $pyclass02_Rows['classid']; ?>"><?php echo $pyclass02_Rows['cname']; ?></a>
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
        <div class="container">
            <?php
            $maxRows_rs = 24; // max
            $pageNum_rs = 0;
            if (isset($_GET['pageNum_rs'])) {
                $pageNum_rs = $_GET['pageNum_rs'];
            }
            $startRows_rs = $pageNum_rs * $maxRows_rs;
            $classid = isset($_GET['classid']) ? intval($_GET['classid']) : 0;
            $queryFirst = "SELECT * FROM product WHERE p_open = 1";

            if ($classid > 0) {
                $SQLcheck = "SELECT level FROM pyclass WHERE classid = $classid";
                $resultCheck = $db_link->query($SQLcheck);
                $rowCheck = $resultCheck->fetch_assoc();

                if ($rowCheck['level'] == 1) {
                    $SQLsubclass = "SELECT classid FROM pyclass WHERE uplink = $classid";
                    $resultSubclass = $db_link->query($SQLsubclass);

                    $subclassArray = array();
                    while ($rowSubclass = $resultSubclass->fetch_assoc()) {
                        $subclassArray[] = $rowSubclass['classid'];
                    }

                    if (!empty($subclassArray)) {
                        $subclassList = implode(',', $subclassArray);
                        $queryFirst .= " AND classid IN ($subclassList)";
                    } else {
                        $queryFirst .= " AND classid = $classid";
                    }
                } else {
                    $queryFirst .= " AND classid = $classid";
                }
            }

            $queryFirst .= " ORDER BY product.p_id DESC";
            $query = $queryFirst . " LIMIT $startRows_rs, $maxRows_rs";
            $pList01 = $db_link->query($query);
            $i = 1;
            ?>

            <?php while ($pList01_Rows = $pList01->fetch_assoc()) { ?>
                <?php if ($i % 4 == 1) { ?> <div class="content"> <?php } ?>
                    <a href="#" class="card">
                        <div class="items">
                            <img src="./images/<?php echo $pList01_Rows['img_file']; ?>" title="<?php echo $pList01_Rows['p_name']; ?>">
                        </div>
                        <div class="info">
                            <p><?php echo $pList01_Rows['p_name']; ?></p>
                            <h6 class="price">$<?php echo $pList01_Rows['p_price']; ?></h6>
                            <button><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </a>
                    <?php if ($i % 4 == 0 || $i == $pList01->num_rows) { ?>
                    </div><?php } ?>
            <?php $i++;
            } ?>
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
<?php
function activeShow($num, $chkPoint)
{
    return (($num == $chkPoint) ? "active" : "");
}
?>