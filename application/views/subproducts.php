<section id="wf-subpage">
            
         <div class="subpage-content">
            <div class="container">
                <div class="row">
                    
                    
                    
                    <div class="col-md-12">
                        
                        <div class="subpage-title">
                            <h2><?=$subproduct_title?></h2>
                        </div>
                        
                        
                        <?php 
                            
                            $this->load->view('subproducts/'.$subproduct_slug);
                        
                        ?>
            
                        
                        <div class="clearfix"></div>
    
                    </div>
                </div>
            </div>
        </div>
  
</section>