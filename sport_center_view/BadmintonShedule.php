
<?php include_once __DIR__ . '/ParentHeader.php'; ?>
<!-- CreateStudent Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-0">
                <div class="contact-form">
                    <h4>Shedule</h4>
                    <form action="#" >
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>ID NO</b></label>
                                <input type="text" name="refNo" value="<?php echo $data['count']; ?>"  required="required" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>Team 1</b></label>
                                <select id="team1" name="team1" style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <?php foreach ($data["faculty"] as $faculty) { ?>
                                        <option value=" <?php echo $faculty["name"]; ?>">
                                            <?php echo $faculty["name"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label><b>Team 2</b></label>
                                <select id="team2" name="team2" style="background-color: #2d2d2d;color: #a6a6a6;border: none;height: 45px;width: 100%;text-decoration: none;">
                                    <?php foreach ($data["faculty"] as $faculty) { ?>
                                        <option value=" <?php echo $faculty["name"]; ?>">
                                            <?php echo $faculty["name"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><b>End Date</b></label>
                                <input name="endTime" required="required" type="date" value="<?php date() ?>">
                            </div>
                            <div class="col-lg-6">
                                <label><b>Match Count</b></label>
                                <input type="text" name="match_count"   required="required" >
                            </div>
                        </div>

                        <h4 style="color: whitesmoke;">Single Match</h4>
                        <form action="index.php?controller=badminton&action=newFacTeam" >
                            <!-- ---row 01--- -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <label><b>Team 1 Player</b></label>
                                    <input type="text" name="team1_player"  placeholder="Name" required="required" >
                                </div>
                            
                                <div class="col-lg-6">
                                    <label><b>Team 2 Player</b></label>
                                    <input type="text" name="team2_player" placeholder="Name" required="required">
                                </div>                                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3">
                                    <!--<a href="#" class="primary-btn cta-btn">Apply</a>-->
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="c-btn">Shedule</button>
                                </div>                                
                            </div>
                        </form>
                        
                        <br><br><br>
                        
                        <h4 style="color: whitesmoke;">Double Match</h4>
                        <form action="index.php?controller=badminton&action=newFacTeam" >
                            <!-- ---row 01--- -->
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <label><b>Team 1 Player 1</b></label>
                                    <input type="text" name="team1_player1"  placeholder="Name" required="required" >
                                </div>
                            
                                <div class="col-lg-6">
                                    <label><b>Team 1 Player 2</b></label>
                                    <input type="text" name="team1_player2" placeholder="Name" required="required">
                                </div>                                
                            </div>
                            <br>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <label><b>Team 2 Player 1</b></label>
                                    <input type="text" name="team2_player1"  placeholder="Name" required="required" >
                                </div>
                            
                                <div class="col-lg-6">
                                    <label><b>Team 2 Player 2</b></label>
                                    <input type="text" name="team2_player2" placeholder="Name" required="required">
                                </div>                                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3">
                                    <!--<a href="#" class="primary-btn cta-btn">Apply</a>-->
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="c-btn">Shedule</button>
                                </div>                                
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CreateStudent Section End -->
<?php include_once __DIR__ . '/ParentFooter.php'; ?>
