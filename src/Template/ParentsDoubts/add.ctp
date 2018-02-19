<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($ParentsDoubts,['enctype'=>"multipart/form-data"]) ?>
          
            <div class="col-md-12 form-group1">
              <label class="control-label">Parents Doubt</label>
              <textarea name="parents_doubt" placeholder="Parents Doubt....." required=""></textarea>
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
 </div>

</div>
<script>
  CKEDITOR.replace('parents_doubt');
</script>
          