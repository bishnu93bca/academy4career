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
<center><h3><u>Questions</u></h3></center>
<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Tests,['enctype'=>"multipart/form-data"]) ?>
          
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name" name="name" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
               <textarea name="description" placeholder="Description....." required=""></textarea>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Time Limt</label>
              <input type="time" name="time" class="time" placeholder="Time Limt" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">CVS File</label>
              <input type="file" name="upload_file" placeholder="Answer....." required="">
            </div>

             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
            <br>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>
<script>
  // CKEDITOR.replace('description');
</script>
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
