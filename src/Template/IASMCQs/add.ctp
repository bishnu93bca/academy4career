<div class="validation-system"><center><h2>IAS MCQs</h2></center>
    <div class="validation-form">
        <?= $this->Form->create($IASMCQs,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Subject Name</label>
              <input type="text" placeholder="Subject Name" name="ias_subject" required="">
            </div>        
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Description</label>
              <textarea name="test_desc" placeholder="Description....." required=""></textarea>
            </div>
            </div>
             
           <div class="col-md-12 form-group1 group-mail">
              <?php 
                echo '<label for="image" class="control-label">Image</label>';
                echo $this->Form->input('subject_image',['type' => 'file','label'=>false,'id'=>'image','accept'=>"image/*"]);?>

            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Time Limt</label>
              <input type="time" name="time" class="time" placeholder="Time Limt" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Question CVS File</label>
              <input type="file" name="upload_file" placeholder="Answer....." required="">
              <br>
            </div>


            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
  <!---->
 </div>

</div>
<style type="text/css">
  .time{
        border: 1px solid #E9E9E9;
    font-size: 0.9em;
    width: 100%;
    outline: none;
    padding: 0.5em 1em;
    color: #111;
    margin-top: 0.5em;
  }
</style>