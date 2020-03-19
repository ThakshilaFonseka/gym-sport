<?php include_once __DIR__ . '/ParentHeader.php'; ?>


<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 contact-form">
        <h4>Get in touch</h4>

        <div class="row">
            <form action="index.php?controller=user&action=newUser" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">
                        <a  href="index.php?controller=user&action=newUser" style="color:whitesmoke;">User Manage
                        </a>
                    </button>
                </div>
            </form>
            <form action="CoachDashboard.php">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn"><a  href="CoachDashboard.php" style="color:whitesmoke;">Coach Manage
                        </a>
                    </button>
                </div>
            </form>
            <form action="SportDashboard.php" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">
                        <a  href="SportDashboard.php" style="color:whitesmoke;">Sport Manage
                        </a>
                    </button>
                </div>
            </form>
            <form action="#">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">
                        <a  href="" style="color:whitesmoke;">Faculty Manage
                        </a>
                    </button>
                </div>
            </form>

        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>