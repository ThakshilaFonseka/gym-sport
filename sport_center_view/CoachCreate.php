<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 offset-lg-0">
                <div class="contact-form">
                    <h4>Coach Registration</h4>
                    <form action="index.php?controller=coach&action=create" method="post">
                        <!-- ---row 01--- -->
                        <div class="row">
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>ID NO</b></label>
                                <input type="text" name="refNo"  value="<?php echo $data['count']; ?>" required="required" >
                            </div>
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>Name</b></label>
                                <input type="text" name="name"  required="required">
                            </div>                                
                        </div>
                        <!-- ---row 01--- -->
                        <div class="row">                           
                            <div class="col-lg-2">
                                <label style="color:d3d3d3;"><b>Male</b></label>
                                <input type="radio" name="gender" style="height: 15px;" value="male">
                            </div>

                            <div class="col-lg-2">
                                <label style="color:d3d3d3;"><b>Female</b></label>
                                <input type="radio" name="gender" style="height: 15px;" value="female">
                            </div>
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Date Of Birth</b></label>
                                <input name="dob" type="date"  value="<?php date() ?>">
                            </div> 
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Mobile</b></label>
                                <input type="text" name="mobile" >
                            </div> 
                        </div>

                        <div class="row">
                            
                             
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>Email</b></label>
                                <input type="text" name="email" >
                            </div>  
                        </div>


                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-9">

                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="primary-btn cta-btn" style="background-color:#e4381C;">NEXT</button>
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