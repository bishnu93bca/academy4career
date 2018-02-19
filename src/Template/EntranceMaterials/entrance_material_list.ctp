<div class="m_banner">
	<div class="container-fluid">
		
	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
	
  	<div class="col-md-12 column-15">
  	   <h6>Entrance Materials</h6>
  	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
         <div class="entry_values">
  	     <?= $this->Form->create($EntranceExams) ?>
            <div class="col-md-8 grid_1">
              <input type="text" class="form-control m_6 col-md-8" name=" entrance_name" id="" >
            </div>
              <div class="col-md-4 grid_1">
              <button type="submit" class="btn btn-primary form-control">Search</button>
              </div>
                <div class="clearfix"></div>

              </form>
          </div>
        <?php foreach ($EntranceExams as $key => $entrance):?>
    		  <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">

                  <?=$this->Html->image('entranceexams/'.$entrance->entrance_image,['class'=>'img-thumbnail','width'=>140])?>
                 
                </div>
                <div class="name">
                    
                    <?= $this->Html->link(__('<span>'.$entrance->entrance_name.'</span>'), ['action' => 'readmore',$entrance->entrance_id],['escape'=> false])?>
                    <br>
                    <p><b>Date:</b> <?=h(date_format($entrance->entrance_date,'d/m/Y'))?></p>
                    <div class="clearfix"></div>	
                    <p><?php if(strlen(strip_tags($entrance->entrance_description))> 200){
                          echo substr(strip_tags($entrance->entrance_description),0,200)."...";

                        } else{    
                          echo strip_tags($entrance->entrance_description)."...";
                        }?></p>                                                
                </div> 
        			  <div class="contact_btn pull-left">
                      <?=$this->Html->link('Read More..',['action'=>'readmore',$entrance->entrance_id],['class'=>'add_btn classi_btn fulldownload'])?>
                </div>
                 <div class="clearfix"></div><hr> 
    			   </div>
          </div>
        <?php endforeach;?>

  		
  	
    </div>
  </div>
</div>
<script type="text/javascript">
 function discipline(){
  var id =$('#level_id').val();
    $.ajax({url: "<?php echo BASE_URL;?>disciplines/ajax/"+id,
               success: function(data){
                html = "";
                $obj=JSON.parse(data);
                for (var i =0; i<$obj.length;i++) {
                // console.log($obj[i].id);
                  html += "<option value=" + $obj[i].id  + ">" +$obj[i].name + "</option>"
                }
                 document.getElementById("discipline_id").innerHTML = html;
                
          }});
 }
</script>