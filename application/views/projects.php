        

<section id="wf-subpage">
    

 
        <div class="subpage-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="subpage-title">
                            <h2 style="text-align: left"><?=$title;?></h2>
                        </div>


                    </div>

                </div>                    
                
                <?php


                    $cnt = 1;

                    foreach($project_details as $pdetails){

                        if($cnt % 2 != 0){
                            echo '<div class="row">';
                        }

                            echo '<div class="col-md-6">
                                    <div class="img-container">
                                    <img src="'.base_url('assets/img/projects/'.$pdetails['cat_slug'].'/'.$pdetails['project_image']).'">
                                    <div class="prodcard"><h3>'.$pdetails['project_name'].'</h3></div>
                                    </div>
                                    </div>';

                        if($cnt % 2 == 0){
                            echo '</div>';
                        }

                        $cnt++;

                    }

                ?>


                <div class="clearfix"></div>
    
                    
            </div>
        </div>


  
</section>
