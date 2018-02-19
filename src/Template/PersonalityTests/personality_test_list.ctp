<div class="test_banner">
  <div class="container-fluid">
  
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
  
  <div class="col-md-12 column-15">
     <h6>Personality Test</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

    <?php foreach ($PersonalityTests as $key => $value):?>
      <div class="col-lg-6 alltest">
          <div class="panel-body_3">
     
     
            <div class="pull-left material-img">
              <a class="thumbnail" href="#">
                <?=$this->Html->image('personalitytests/'. $value->personality_test_image,['class'=>'img-thumbnail','width'=>'140'])?>
              </a>
            </div>
            <div class="name">
              
                <?= $this->Html->link(__('<span>'.$value->personality_test_name.'</span>'), ['action' => 'readmore',$value->personality_test_id],['escape'=> false])?>
              <br>
            <div class="clearfix"></div> 
             
                  <p><?php if(strlen(strip_tags($value->personality_test_desc))> 200){
                          echo substr(strip_tags($value->personality_test_desc),0,200)."...";
                        } else{    
                          echo strip_tags($value->personality_test_desc)."...";
                        }?></p>                                                
              </a>
            </div> 
            <div class="contact_btn pull-left">
              <?=$this->Html->link('Read More..',['action'=>'readmore',$value->personality_test_id],['class'=>'add_btn classi_btn fulldownload'])?>
            </div>
             <div class="clearfix"></div><hr>
          </div>
      </div>
    <?php endforeach;?>
   </div>
</div>