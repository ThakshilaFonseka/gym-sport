<?php include_once __DIR__ . '/ParentHeader.php'; ?>


<!-- dash Section Begin -->
<section class="dash-section spad">
    <div class="col-lg-11 offset-lg-1 contact-form">
        <h4>Get in touch</h4>

        <div class="row">
            <form action="index.php?controller=badminton&action=newFacTeam" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">
                        <a  href="index.php?controller=badminton&action=newFacTeam" style="color:whitesmoke;">New Faculty Team
                        </a>
                    </button>
                </div>
            </form>
            <br><br>
            <form action="index.php?controller=badminton&action=newMatch" method="POST">
                <div class="col-lg-2">
                    <button type="submit" class="c-btn">
                        <a  href="index.php?controller=badminton&action=newMatch" style="color:whitesmoke;">Match
                        </a>
                    </button>
                </div>
            </form>
            
        </div>

    </div>
</section>
<!-- dash Section End -->


<?php include_once __DIR__ . '/ParentFooter.php'; ?>