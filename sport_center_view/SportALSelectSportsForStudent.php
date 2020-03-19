<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 offset-lg-0">
                <div class="contact-form">
                    <h4>Select Sports For Coach</h4>
                    <form action="index.php?controller=sportAllocation&action=create" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>ID NO</b></label>
                                <input type="text" name="refNo" value="<?php echo $_REQUEST['studentId']; ?>" required="required" >
                            </div>
                            <div class="col-lg-6">
                                <label><b>Name</b></label>
                                <input type="text" name="name" value="<?php echo $_REQUEST['studentName']; ?>" required="required">
                            </div>                                
                        </div>
                        <div class="row">

                            <?php foreach (json_decode($_GET['sportA']) as $sport) { ?>
                                <div class="col-lg-1">
                                    <label style="color:whitesmoke;"><b><?php echo $sport; ?></b><input type="checkbox" name="sport[]" id="sport" style="height:20px;" value="<?php echo $sport; ?>" name="sport"></label>
                                </div>      
                            <?php } ?>

                        </div>

                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-6">
                               

                            </div>
                            <div class="col-lg-3">
                                <!--<a href="index.php?controller=jobSeeker&action=pdf" method="post" class="primary-btn cta-btn">-->
                                    <input  type="file" name="file" id="file" style="background-color: transparent;color: whitesmoke;width: 250px;">
                                <!--</a>-->
                            </div>
                            <div class="col-lg-3">
                                <!--<a href="#" class="primary-btn cta-btn">Apply</a>-->
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
