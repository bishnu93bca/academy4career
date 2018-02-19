<div class="faculty_banner">
  <div class="container-fluid">
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Facultys</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       
      <?php foreach ($Facultys as $key => $value):?>
          <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <a class="thumbnail" href="#">
                    <?=$this->Html->image('facultys/'.$value->faculty_image,['class'=>'img-thumbnail','width'=>140])?>
                  </a>
                </div>
                <div class="name">
                    <a href="#">
                        <span><?=h($value->faculty_name)?></span>
                    </a><br>
                   <p> <b>Faculty Department: </b>
                    <?php if(strlen(strip_tags($value->faculty_department))> 200){
                          echo substr(strip_tags($value->faculty_department),0,200)."...";

                        } else{    
                          echo strip_tags($value->faculty_department)."...";
                        }?></p>
                   
                                                                         
                          <div class="clearfix"></div>
                    
                        <p><b>Description: </b><?php if(strlen(strip_tags($value->faculty_description))> 200){
                          echo substr(strip_tags($value->faculty_description),0,200)."...";

                        } else{    
                          echo strip_tags($value->faculty_description)."...";
                        }?></p>
                    
                </div> 
                <div class="contact_btn pull-left">
                      <?=$this->Html->link('Read More..',['action'=>'readmore',$value->faculty_id],['class'=>'add_btn classi_btn fulldownload'])?>
                     </div>
                     <div class="clearfix"></div><hr>
              </div>
          </div>
      <?php endforeach;?> 
   </div>
</div>
