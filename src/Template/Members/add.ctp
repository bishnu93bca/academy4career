
    
<div class="col-md-12 col-lg-12 about_middle">
 <div class="container">
  <div class="column_5">
  <?php foreach ($Plans as $key => $value) {?>
    
    <div class="col-md-4">
        <div class="item-testimonial">
          <div class="content_box">
            <blockquote>
            <h2><center><?=h($value->name)?> </center></h2>
            <p style="text-align: center;" >
            Expires On: 31 Aug 2017M<br>
            <hr>
            10 QUESTIONS
            <hr>
            10 MARKS<br>
             <hr>

              10 MINUTES<br>
              <hr>
              Rs  <?=h($value->amount)?>
            </p>
                    
              
                 <?=$this->Html->link('Submit',['action'=>'view',$value->id],['class'=>'btn btn-success'])?>
              
            </blockquote>
          </div>
           
        </div>
    </div>
<?php } ?>
      
    
      <div class="clearfix"> </div>
 </div>
 </div>
</div>
</form>