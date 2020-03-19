<?php include_once __DIR__ . '/ParentHeader.php'; ?>


<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 contact-form">
        <h4>Faculty Manage</h4>

        <div class="row">
            <form action="../../index.php?controller=faculty&action=newFaculty" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">New Faculty</button>
                </div>
            </form>
            <form action="../../index.php?controller=faculty&action=updateItemDash" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">Search Faculty</button>
                </div>
            </form>
            
        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>