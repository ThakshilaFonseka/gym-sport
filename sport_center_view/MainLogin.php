<?php include_once __DIR__ . '/ParentHeader.php'; ?>

<hr style="background-color:#e4381C;color:#e4381C;margin:0px;height:10px ">

<!-- Map Section Begin -->
<div class="map">

    <div class="map-contact-detalis">
        <div class="open-time">
            
        </div>
        <div class="map-contact-form">
            <h5>Sign In</h5>
            <form action="index.php?controller=user&action=login" method="POST">
                <input type="text" name="userId" placeholder="Name" required="required"><br>
                <input type="password" name="pwd" placeholder="Password" required="required"><br><br><br><br><br>
                
                <button type="submit" class="site-btn">Sign In</button>
            </form>
        </div>
    </div>
</div>
<!-- Map Section End -->

<hr style="background-color:#e4381C;color:#e4381C;margin:0px;height:20px ">
<?php include_once __DIR__ . '/ParentFooter.php'; ?>
    
