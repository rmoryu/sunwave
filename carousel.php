<section id="cover-banner">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <?php
        $carousel_query = "SELECT * FROM carousel WHERE caro_online=1 ORDER BY caro_sort";
        $carousel = $db_link->query($carousel_query);
        $rowCount = $carousel->num_rows;
        $i = 0;
        ?>
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < $rowCount; $i++) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo activeShow($i, 0); ?>" aria-current="<?php echo ($i === 0) ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $i; ?>"></button>
            <?php } ?>
        </div>

        <div class="carousel-inner">
            <?php
            $i = 0;
            while ($data = $carousel->fetch_assoc()) { ?>
                <div class="carousel-item <?php echo activeShow($i, 0); ?>">
                    <img src="./images/carousel/<?php echo $data['caro_pic']; ?>" class="d-block w-100" alt="<?php echo $data['caro_title']; ?>">
                    <div class="carousel-caption">
                        <h5><?php echo $data['caro_title']; ?></h5>
                        <p><?php echo $data['caro_content']; ?></p>
                    </div>
                </div>
            <?php $i++;
            } ?>
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
</section>