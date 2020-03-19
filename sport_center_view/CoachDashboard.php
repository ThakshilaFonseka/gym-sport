<?php include_once __DIR__ . '/ParentHeader.php'; ?>

<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 contact-form">
        <h4>Coach Manage</h4>

        <div class="row">
            <form action="index.php?controller=coach&action=newCoach" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">New Coach</button>
                </div>
            </form>
            <form action="index.php?controller=coach&action=" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">Delete Coach</button>
                </div>
            </form>
            
        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>