<div class="scholarship_banner">
	<div class="container-fluid">

	</div>
</div>
<div class="about_top">
  <div class="container-fluid">
  	<div class="col-md-12 column-15">
  	   <h6>Scholarship</h6>
  	   <p class="m_5"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
         <div class="entry_values">
  	     <?= $this->Form->create($ScholarShips) ?>
      	    <div class="col-md-3 grid_1">
                  <select class="form-control m_6 col-md-3" name="year">
                    <option value="">Select Year</option>
                    <option value="2014">2010</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2018">2021</option>
                    <option value="2019">2022</option>
                    <option value="2020">2023</option>
                    <option value="2018">2024</option>
                    <option value="2019">2025</option>
                    <option value="2020">2026</option>
                    <option value="2018">2027</option>
                    <option value="2019">2028</option>
                    <option value="2020">2029</option>
                    
                  </select>
            </div>
            <div class="col-md-3 grid_1">
                <select class="form-control m_6 col-md-3" name="level_id" id="level_id" onchange="discipline()">
                    <option value="">Select Level</option>
                    <?php foreach ($Levels as $key => $value):?>
                      <option value="<?=h($value->level_id)?>"><?=h($value->level_name)?></option>
                    <?php endforeach;?>
                </select>
              </div>
            <div class="col-md-3 grid_1">
              <select class="form-control m_6 col-md-3" name="discipline_id" id="discipline_id" >
                <option>Select Discipline</option>
              </select>
            </div>
              <div class="col-md-3 grid_1">
              <button type="submit" class="btn btn-primary form-control">Search</button>
              </div>
                <div class="clearfix"></div>
              </form>
          </div>
        <?php foreach ($ScholarShips as $key => $scholarship):?>
    		  <div class="col-lg-6 alltest">
              <div class="panel-body_3">
                <div class="pull-left material-img">
                  <?=$this->Html->image('scholarships/'.$scholarship->scholarship_image,['class'=>'img-thumbnail','width'=>140])?>
                </div>
                <div class="name">
                    <?= $this->Html->link(__('<span>'.$scholarship->scholarship_name.'</span>'), ['action' => 'readmore',$scholarship->scholarship_id],['escape'=> false])?>
                    <br>
                    <p> <b>Class:</b> <?=h($scholarship->level->level_name)?></p>
                    <p><b>Discipline:</b> <?=h($scholarship->discipline->discipline_name)?></p>  
                    <p><b>Year:</b> <?=h($scholarship->scholarship_year)?></p>
                    <div class="clearfix"></div>	
                    <p>
                      <?php if(strlen(strip_tags($scholarship->scholarship_desc))> 200){
                          echo substr(strip_tags($scholarship->scholarship_desc),0,200)."...";
                        } else{    
                          echo strip_tags($scholarship->scholarship_desc)."...";
                        }?>
                    </p>                                                
                </div> 
        			  <div class="contact_btn pull-left">
                    <?=$this->Html->link('Read More..',['controller'=>'scholar-ships','action'=>'readmore',$scholarship->scholarship_id],['class'=>'add_btn classi_btn fulldownload'])?>
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