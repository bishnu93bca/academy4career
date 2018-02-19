<div class="validation-system">
    <div class="validation-form">           
        <?= $this->Form->create($QuotefortheDays,['enctype'=>"multipart/form-data"]) ?>
          <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Quotes</label>
              <textarea placeholder="Quotes"  name="quotes" required=""><?=h($QuotefortheDays->quotes)?></textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Author Name</label>
              <input type="text" placeholder="Author Name" value="<?=h($QuotefortheDays->author_name)?>" name="author_name" required="">
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
  CKEDITOR.replace('quotes');
</script>  