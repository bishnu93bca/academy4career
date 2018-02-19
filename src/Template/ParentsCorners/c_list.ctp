<div class="quote_banner">
  <div class="container-fluid">

    
  </div>
</div>
<div class="about_top">
 <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Parents Corners</h6> 
     <p class="m_5">Ornare tortor vestibulum vestibulum non, fringilla at. Porta at egestas id. Ante sodales sed cum volutpat ac, vel rutrum nunc. Mi fermentum potenti ultrices sapien, lectus ligula. Vestibulum sed a neque wisi tortor ac, wisi orci aenean. Arcu wisi est mauris tellus, bibendum volutpat eu, lectus vulputate tempus egestas. Sem aliquam facilisis etiam neque lectus ultricies, vitae turpis. Curabitur nulla nec mattis egestas. Auctor est orci sed elementum sollicitudin libero, elementum mauris tincidunt. Volutpat eros est in eros quisque duis.</p>
     <?php if(!empty($_SESSION->id)){?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Question</button> 
     <?php }else{?>
      <?=$this->Html->link('Add Question',['controller'=>'users','action'=>'login'],['class'=>'btn btn-primary']);?>
     <?php } ?>
    <?php foreach ($ParentsCorners as $key => $value):?>
       <div class="row_1">              
            <div class="col-lg-12 col-sm-12">            
            <div class="blog-entry-title">                     
                    <div class="post__1" style="overflow: hidden;">
                     <span class="post__1-item"><span class="link_2">
                        Date :<?php echo date_format($value->created,'d/m/Y');?></span>
                    </span>
                   </div>                       
                <p><b>“<?=$this->Html->link($value->question,['controller'=>'parents-corners','action'=>'listview',$value->parents_id])?>„</b></p> 
                  <h4><i>—(<u><?=h(ucfirst($value->user->first_name)." ".ucfirst($value->user->last_name))?></u>)</i></h4>
              </div>   
            </div>
            <div class="clearfix"></div>
        </div>  
      <?php endforeach;?>
               
           
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
        <h4 class="modal-title" style="text-align: center;">Add Question</h4>
        <hr>
      </div>
      <div class="modal-body">
        <?= $this->Form->create('',['class'=>'form-horizontal bucket-form']) ?>
            <div class="form-group">
                <div class="col-sm-12">
                   <?= $this->Form->input('question',['type'=>'textarea','class'=>'form-control','label'=>'Question','required'=>true]) ?>
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
