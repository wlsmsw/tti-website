<section id="wf-subpage">
    

 
        <div class="subpage-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="subpage-title">
                            <h2><?=$title?></h2>
                        </div>
                        
                        <div class="subpage-content-main">
                            <h2>Description</h2>
                            <p><i class="fa-solid fa-calendar"></i>Posted <?= date("jS \of F Y", strtotime($dateadded)); ?></p>
                            <p><?=$description?></p>
                        </div>
                        
                        <div class="subpage-content-main">
                            <h2>Overview</h2>
                            <ul>
                                <?php foreach($overview as $o){ echo '<li>'.$o.'</li>'; } ?>
                            </ul>
                        </div>
                        
                        <div class="subpage-content-main">
                            <h2>Qualifications</h2>
                            <ul>
                                <?php foreach($qualifications as $q){ echo '<li>'.$q.'</li>'; } ?>
                            </ul>
                        </div>
                        
                        <div class="subpage-content-main">
                            <h2>Location</h2>
                            <p><?=$location?></p>
                        </div>
                        
                        <div class="subpage-content-main">
                            <h2>Employment Type</h2>
                            <p><?=$type?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
</section>