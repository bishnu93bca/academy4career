         
        <?= $this->Form->create('',['enctype'=>"multipart/form-data"]) ?>
          
            
            <div class="col-md-12 form-group1">
              <label class="control-label">Answer</label>
              <input type="file" name="upload_file" placeholder="Answer....." required="">
            </div>
            
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
             
            </div>
          <div class="clearfix"> </div>
        </form>
 