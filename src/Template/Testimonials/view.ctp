
            <div class="col-md-12 form-group1 group-mail">
              <h3>Test Imonial</h3>
              <div class="well">
               <?=h($Testimonials->testimonial)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Test Imonial Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('testimonials/'.$Testimonials->testimonial_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'testimonials',$Testimonials->testimonial_image], ['escape' => false]); ?>
              </div>
            </div>
