<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-0">
                <div class="contact-form">
                    <h4>Add New Faculty</h4>
                    <form action="#">
                        <!-- ---row 01--- -->
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>ID NO</b></label>
                                <input type="text" name="refNo" value="<?php echo $data['count']; ?>"  required="required" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>Name</b></label>
                                <input type="text" name="name" placeholder="Name" required="required">
                            </div>                                
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <!--<a href="#" class="primary-btn cta-btn">Apply</a>-->
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="c-btn">Save</button>
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
