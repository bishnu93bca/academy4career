<div class="important_banner">
  <div class="container-fluid">
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Important Link</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       
      <?php foreach ($ImportantLinks as $key => $value):?>
          <div class="col-lg-12 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <a class="thumbnail" href="<?=h($value->link_url)?>" target="_block">
                    <?=$this->Html->image('importantlinks/'.$value->link_image,['class'=>'img-thumbnail','width'=>140])?>
                  </a>
                </div>
                <div class="name">
                    <a href="<?=h($value->link_url)?>" target="_block">
                        <span><?=h($value->link_content)?></span>
                    </a><br>
                    
                </div> 
                <div class="contact_btn pull-left">
                      
                      <a class="add_btn classi_btn fulldownload" href="<?=h($value->link_url)?>" target="_block">Read More..</a>
                     </div>
                     <div class="clearfix"></div><hr>
              </div>
          </div>

      <?php endforeach;?> 
   </div>
</div>
</div>