<div class="meet_banner">
  <div class="container-fluid">
    
  </div>
</div>
<div class="about_bottom">
<?php foreach ($Experts as $key => $value):?>
  <div class="container-fluid">
    
  
  <div class="col-md-9 column-7">
    <h3><?=h($value->expert_name)?></h3>
    <p><b>Specialization:</b> <?=h($value->expert_specialization)?></p>

    <p><?php if(strlen(strip_tags($value->expert_description))> 200){
                          echo substr(strip_tags($value->expert_description),0,200)."...";

                        } else{    
                          echo strip_tags($value->expert_description)."...";
                        }?></p>
 
     <footer class="entry-meta clearfix"> 
        <?=$this->Html->link('Read More..',['action'=>'readmore',$value->expert_id],['class'=>"btn-read-more", 'style'=>"outline: none;", 'hidefocus'=>"true"])?>  
      </footer>
  </div>  
<div class="col-md-3 column-6">
 <?=$this->html->image('experts/'.$value->expert_image,['class'=>'img-thumbnail','width'=>140])?>
  </div>  
    <div class="clearfix"> </div>
 </div>
 <hr />
  
 
</div>
          <?php endforeach;?>
   </div>
</div>