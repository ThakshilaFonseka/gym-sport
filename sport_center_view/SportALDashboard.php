<?php include_once __DIR__ . '/ParentHeader.php'; ?>

<link rel="stylesheet" href="../../assets/css/styleMy.css" type="text/css">
<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 dash-form">
        <h4>Get in touch</h4>

        <div class="row">
            <form action="../../index.php?controller=sportAllocation&action=newSportALCoach" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn" style="width:200px;">Sport Allocation for Coach</button>
                </div>
            </form>
            <form action="../../index.php?controller=sportAllocation&action=newSportALStudent" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn" style="width:200px;">Sport Allocation for Student</button>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>