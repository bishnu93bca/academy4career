<div class="validation-system">
    <div class="validation-form">  <center><h3>Students Test Series</h3> </center>        
        <?= $this->Form->create($StudentsTestSeries,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Class</label>
              <select name="class_id" id="class_id" class="form-control1" onchange="subject()">
                    <?php foreach ($Class as $key => $value):?>
                      <option value="<?=h($value->class_id)?>"><?=h($value->class_name)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Subject</label>
              <select name="subject_id" id="subject_id" class="form-control1">
                    <option>Select Subject</option>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Student Test Series Name</label>
              <input type="text" value="<?=h($StudentsTestSeries->student_test_series_name)?>" placeholder="Student Test Series Name" name="student_test_series_name" required="">
            </div>
             <div class="col-md-12 form-group1">
              <label class="control-label">Total Test</label>
              <input type="text" value="<?=h($StudentsTestSeries->test_series_total_test)?>" placeholder="Total Test" name="test_series_total_test" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Student Test Series Description</label>
              <textarea type="text" placeholder="Student Test Series Description" name="student_test_series_description" required=""><?=h($StudentsTestSeries->student_test_series_description)?></textarea>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" value="<?=h($StudentsTestSeries->student_test_series_price)?>" placeholder="Price" name="student_test_series_price" required="">
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label"> Image</label>';
                echo $this->Form->input('student_test_series_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>
<script>
  CKEDITOR.replace('student_test_series_description');
</script> 
<script type="text/javascript">
 function subject(){
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
          