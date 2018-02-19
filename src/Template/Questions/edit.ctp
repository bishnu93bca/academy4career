<center><h3><u>Questions</u></h3></center>
<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($Questions,['enctype'=>"multipart/form-data"]) ?>
          
            <div class="col-md-12 form-group1">
              <label class="control-label">Test Types</label>
                <select name="test_id" id="selector1" class="form-control1">
                    <?php foreach ($Tests as $key => $value):?>
                      <option value="<?=h($value->id)?>"><?=h($value->title)?></option>
                    <?php endforeach;?>
                  </select>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <textarea name="name" placeholder="Question....." required=""><?=h($Questions->name)?></textarea>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Option One</label>
              <input type="text" name="op_1" value="<?=h($Questions->op_1)?>" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Option Two</label>
              <input type="text" name="op_2" value="<?=h($Questions->op_2)?>" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Option Three</label>
              <input type="text" name="op_3" value="<?=h($Questions->op_3)?>" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Option Four</label>
              <input type="text" name="op_4" value="<?=h($Questions->op_4)?>" required="">
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Answer</label>
              <input type="text" name="answer" value="<?=h($Questions->answer)?>" required="">
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>
<script>
  //CKEDITOR.replace('parents_doubt');
</script>
          