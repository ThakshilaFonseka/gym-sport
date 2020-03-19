<?php include_once __DIR__ . '/ParentHeader.php'; ?>

<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 offset-lg-0">
                <div class="contact-form">
                    <h4>Student Registration</h4>
                    <form action="index.php?controller=registration&action=registration" method="post">
                        <!-- ---row 01--- -->
                        <div class="row">
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>ID NO</b></label>
                                <input type="text" name="refNo"  value="<?php echo $data['refNo']; ?>" required="required" >
                            </div>
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>Name</b></label>
                                <input type="text" name="name" value="<?php echo $data['name']; ?>" required="required">
                            </div>                                
                        </div>
                        <!-- ---row 01--- -->
                        <div class="row">                           
                            <div class="col-lg-2">
                                <label style="color:d3d3d3;"><b>Male</b></label>
                                <input type="radio" name="gender" style="height: 15px;" name="">
                            </div>

                            <div class="col-lg-2">
                                <label style="color:d3d3d3;"><b>Female</b></label>
                                <input type="radio" name="gender" style="height: 15px;" name="">
                            </div>
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Date Of Birth</b></label>
                                <input name="dob" type="date" placeholder="<?php echo $data['dob']; ?>" value="<?php date() ?>">
                            </div> 
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Faculty</b></label>
                                <select id="facultyN" name="facultyN" style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <option value="<?php echo $data['stuFaculty']; ?>" selected="selected"><?php echo $data['stuFaculty']; ?></option>
                                    <?php foreach ($data["faculty"] as $faculty) { ?>
                                        <option value=" <?php echo $faculty["name"]; ?>">
                                            <?php echo $faculty["name"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Level</b></label>
                                <select id="level" name="level" style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <option value="0" selected="selected">Select</option>                          
                                    <option value="Level 1">Level 1</option>
                                    <option value="Level 2">Level 2</option>
                                    <option value="Level 3">Level 3</option>
                                    <option value="Level 4">Level 4</option>
                                </select>
                            </div> 
                            <div class="col-lg-3">
                                <label style="color:d3d3d3;"><b>Mobile</b></label>
                                <input type="text" name="mobile" value="<?php echo $data['mobile']; ?>">
                            </div>  
                            <div class="col-lg-6">
                                <label style="color:d3d3d3;"><b>Email</b></label>
                                <input type="text" name="email" value="<?php echo $data['email']; ?>">
                            </div>  
                        </div>


                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-9">

                            </div>
                            <div class="col-lg-3">
                               <!-- <a href="index.php?controller=registration&action=registration" method="post" class="primary-btn cta-btn">Apply</a>-->
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
