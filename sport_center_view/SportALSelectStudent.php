<?php include_once __DIR__ . '/ParentHeader.php'; ?>

<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 offset-lg-0">
                <div class="contact-form">
                    <h4>Student Search</h4>
                    <form action="index.php?controller=sportAllocation&action=studentSportAL" method="POST">

                        <div class="row">
                            <div class="col-lg-3">
                                <label><b>Select Your ID</b></label>
                                <select id="studentId" name="studentId" style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <option value="0" selected="selected">Select</option>
                                    <?php foreach ($data["student"] as $student) { ?>
                                        <option value=" <?php echo $student["refNo"]; ?>"><?php echo $student["refNo"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                        </div>

                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-9">

                            </div>
                            <div class="col-lg-3">
                                <a href="index.php?controller=sportAllocation&action=studentSportAL" class="primary-btn cta-btn">Apply</a>
                            </div>                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CreateStudent Section End -->
<?php include_once __DIR__ . '/ParentFooter.php'; ?>