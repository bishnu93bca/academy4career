<div class="test1_banner">
  <div class="container-fluid">
 
  </div>
</div>
<div class="about_top">
  <div class="container-fluid">
   
  <div class="col-md-12 column-15">
     <h6>Test</h6>
     <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
       
      <?php foreach ($Tests as $key => $value):?>

          <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <!-- <a class="thumbnail" href="#">
                    <?=$this->Html->image('studentstestseries/'.$value->student_test_series_image,['class'=>'img-thumbnail','width'=>140])?>
                  </a> -->
                </div>
                <div class="name">
                    <a href="#">
                        <span><?=h($value->name)?></span>
                    </a><br>
                    <p> <b>Description : </b><?=h($value->description)?></p>
                    <p><?=h($value->description)?></p>
                    
                </div> 
                <div class="contact_btn pull-left">
                      <?=$this->Html->link('Test Now',['controller'=>'questions','action'=>'view',$value->question_id],['class'=>'add_btn classi_btn fulldownload'])?>
                     </div>
                     <div class="clearfix"></div><hr>
              </div>
          </div>
      <?php endforeach;?> 
   </div>
</div>
<script type="text/javascript">
 function discipline(){
  var id =$('#class_id').val();
    $.ajax({url: "<?php echo BASE_URL;?>subjects/ajax/"+id,
               success: function(data){
                html = "";
                $obj=JSON.parse(data);
                for (var i =0; i<$obj.length;i++) {
                // console.log($obj[i].id);
                  html += "<option value=" + $obj[i].id  + ">" +$obj[i].name + "</option>"
                }
                 document.getElementById("subject_id").innerHTML = html;
                
          }});
 }
</script>