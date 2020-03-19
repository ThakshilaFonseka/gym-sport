<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 offset-lg-0">
                <div class="contact-form">
                    <h4>Student Registration</h4>
                    <form action="index.php?controller=registration&action=applicant" method="POST">
                        <div class="row">                                                      
                            <div class="col-lg-3">
                                <label><b>Student</b></label>
                                <input list="studentIds" type="text" id="studentId" name="studentId" required="required">
                                <datalist id="studentIds">
                                    <?php foreach ($data["student"] as $student) { ?>
                                        <option value=" <?php echo $student["refNo"]; ?>"></option>
                                    <?php } ?>
                                </datalist>                            </div> 
                        </div>

                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-1">

                            </div>
                            <div class="col-lg-3">
                                <!--<a href="index.php?controller=registration&action=applicant" class="primary-btn cta-btn">Apply</a>-->
                                <button type="submit" class="primary-btn cta-btn" style="background-color:#e4381C;">Apply</button>
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
