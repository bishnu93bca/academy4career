<div class="testimonial_banner">
  <div class="container-fluid">
  
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
  
  <div class="col-md-12 column-15">
     <h6>Testimonials</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       
 
<div class="about_middle">
 <div class="container">
   <div id="column" class="sub_col sub_col1" style="height: 65px;">
    <div class="text-inner"><p>&nbsp;&nbsp;NEW</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Testimonials</p>
    </div>
   </div>

  <div class="column_5">
  <?php $i=0;
  foreach ($Testimonials as $key => $value):?>
    <div class="col-md-4">
      <div class="item-testimonial">
        <div class="content_box">
            <blockquote>
                <p><?=h($value->testimonial)?>
                            </p>    
                <footer>reader - <?=$this->Html->link($value->user_name,['controller'=>'#','action'=>'#'])?></footer>
            </blockquote>
          </div>
           <div class="avatar">
           <?=$this->html->image('testimonials/'.$value->testimonial_image,['class'=>'img-responsive'])?></div>
        </div>
    </div>
  <?php $i++;if($i==3){?>
  </div><br><div class="column_5">
  <?php } $i=0;endforeach;?>
  </div>


 </div>
</div>
    
    
   </div>
</div>