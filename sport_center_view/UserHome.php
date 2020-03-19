<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 offset-lg-0">
                <div class="contact-form">
                    <h4>Student Registration</h4>
                    <form action="#">
                        <br><br><br>
                        <div class="row">
                            <?php foreach ($data["sports"] as $sports) { ?>
                                <div class="col-lg-2">
                                    <button type="submit" style="background-color:#e4381C;" >
                                        <a class="primary-btn cta-btn" href="index.php?controller=user&action=goSport&sportName=<?php echo $sports["sport"]; ?>">
                                            <?php echo $sports["sport"]; ?>
                                        </a>
                                    </button>
                                </div>  
                            <?php } ?>      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CreateStudent Section End -->
<?php include_once __DIR__ . '/ParentFooter.php'; ?>
