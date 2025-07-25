        

<section id="wf-subpage">
    

 
        <div class="subpage-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="subpage-title">
                            <h2><?=$title;?></h2>
                        </div>
                        
                        <div class="demo">
                            <ul id="lightSlider">
                        
                                <?php 
                                    foreach($project_details as $pdetails){
                                        echo '<li data-thumb="'.base_url('assets/img/projects/'.$pdetails['cat_slug'].'/'.$pdetails['project_image']).'">
                                            <img src="'.base_url('assets/img/projects/'.$pdetails['cat_slug'].'/'.$pdetails['project_image']).'" style="width: 100% !important" />
                                            <div class="centered"><p>'.$pdetails['project_name'].'</p></div>
                                        </li>';
                                    }
                                ?>
                                
                            </ul>
                        </div>

                        <div class="clearfix"></div>
    
                    </div>
                </div>
            </div>
        </div>
  
</section>
