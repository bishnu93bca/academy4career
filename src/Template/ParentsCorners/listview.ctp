<div class="quote_banner">
  <div class="container-fluid">
  
  </div>
</div>
<div class="about_top">
 <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Parents Corners</h6>
     <h4 style="text-align: center;">Question</h4> 
     <div style=" font-size:20px;color: #000; font-weight: 100;  margin-bottom: 1em;">
     <b><?=h($ParentsCorners->question)?></b></div>
     <?php if(!empty($_SESSION->id)){?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Comment</button> 
     <?php }else{?>
      <?=$this->Html->link('Comment',['controller'=>'users','action'=>'login'],['class'=>'btn btn-primary']);?>
     <?php } ?>
     <br>
     <div  style="overflow: scroll; height: 400px;">
      <?php foreach ($parents_ans as $key => $value):?>

         <div class="col-lg-12">              
              <div class="col-lg-12 col-sm-12">            
              <div class="blog-entry-title">                     
                      <div class="post__1" style="overflow: hidden;">
                       <span class="post__1-item"><span class="link_2">
                          Date :<?php echo date_format($value->created,'d/m/Y');?></span>
                      </span>
                     </div>                       
                  <p><b>“<?=h($value->doubt_answer)?>„</b></p> 
                    <h4><i>(<u><?=h(ucfirst($value->user->first_name)." ".ucfirst($value->user->last_name))?></u>)</i></h4>
                </div>   
              </div>
              <div class="clearfix"></div>
          </div>  
    <?php endforeach;?>
          </div>     
         </div>   
        </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center;">Comment</h4>
        <hr>
      </div>
      <div class="modal-body">
        <?= $this->Form->create('',['class'=>'form-horizontal bucket-form']) ?>
          <?= $this->Form->input('parents_id',['type'=>'hidden','class'=>'form-control','value'=>$ParentsCorners->parents_id]) ?>
            <div class="form-group">
                <div class="col-sm-12">
                   <?= $this->Form->input('doubt_answer',['type'=>'textarea','class'=>'form-control','label'=>'Comment','required'=>true]) ?>
                </div>
                
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <span style="float: right;">
                    <?= $this->Form->button('Submit',['class'=>'btn btn-success']) ?>
                    </span>
                </div>
            </div>     
        <?= $this->Form->end() ?>
      </div>
     </div>

  </div>
</div>
