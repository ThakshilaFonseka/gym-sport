<?php include_once __DIR__ . '/ParentHeader.php'; ?>


<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 contact-form">
        <h4>Get in touch</h4>

        <div class="row">
            <?php foreach ($data["sports"] as $sports) { ?>
                
                    <div class="col-lg-2">
                        <button type="submit" class="c-btn">
                            <a  href="index.php?controller=sport&action=goSport&sportName=<?php echo $sports["sport"]; ?>" style="color:whitesmoke;"><?php echo $sports["sport"]; ?>
                            </a>
                        </button>
                    </div>
                

                <br>
            <?php } ?>     
        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>