<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-0">
                <div class="contact-form">
                    <h4>User Registration</h4>
                    <form action="#">

                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>ID NO</b></label>
                                <input type="text" name="refNo"  placeholder="ID" required="required" >
                            </div>
                            <div class="col-lg-6">
                                <label><b>User Type</b></label>
                                <select id="uType" name="uType"  style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <option value="0" selected="selected"><?php ?></option>
                                    <option value="coach" >Coach</option>
                                    <option value="player" >Player</option>
                                    <option value="captaion" >Captaion</option>
                                    <option value="wiseCaption" >Wise Caption</option>
                                    <option value="admin" >Admin</option> 
                                    <option value="student" >Student</option> 
                                    <option value="other" >Other</option> 
                                </select>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label><b>Name</b></label>
                                <input type="text" name="name" placeholder="Name" required="required">
                            </div>                                
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label><b>Passward</b></label>
                                <input type="password" name="pwd" placeholder="password" required="required">
                            </div>                                
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label><b>Confirm Passward</b></label>
                                <input type="password" name="confirmPwd" placeholder="password" required="required">
                            </div>                                
                        </div>



                        <div class="row">

                        </div>


                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-9">

                            </div>
                            <div class="col-lg-3">
                                <a href="#" class="primary-btn cta-btn">Apply</a>
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

