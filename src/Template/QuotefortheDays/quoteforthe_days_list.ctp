<div class="quote_banner">
  <div class="container-fluid">

    
  </div>
</div>
<div class="about_top">
 <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Quote For The Day</h6>
     <p class="m_5">Ornare tortor vestibulum vestibulum non, fringilla at. Porta at egestas id. Ante sodales sed cum volutpat ac, vel rutrum nunc. Mi fermentum potenti ultrices sapien, lectus ligula. Vestibulum sed a neque wisi tortor ac, wisi orci aenean. Arcu wisi est mauris tellus, bibendum volutpat eu, lectus vulputate tempus egestas. Sem aliquam facilisis etiam neque lectus ultricies, vitae turpis. Curabitur nulla nec mattis egestas. Auctor est orci sed elementum sollicitudin libero, elementum mauris tincidunt. Volutpat eros est in eros quisque duis.</p>
       
    <?php foreach ($QuotefortheDays as $key => $value):?>
       <div class="row_1">              
            <div class="col-lg-12 col-sm-12">            
            <div class="blog-entry-title">                     
                    <div class="post__1" style="overflow: hidden;">
                     <span class="post__1-item"><span class="link_2">
                        Date :<?php echo date_format($value->date,'d/m/Y');?></span>
                    </span>
                   </div>                       
                <p><b>“<?php  echo $value->quotes;?>„</b></p> 
                  <h2><i>—(<u><?=h($value->author_name)?></u>)</i></h2>
              </div>   
            </div>
            <div class="clearfix"></div>
        </div>  
      <?php endforeach;?>
               
           
         </div>   
        </div>
</div>
