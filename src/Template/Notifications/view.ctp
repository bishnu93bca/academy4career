
            <div class="col-md-12 form-group1 group-mail">
              <h3>Notification</h3>
              <div class="well">
               <?=h($Notifications->notification)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Notification Url</h3>
              <div class="well">
               <?=h($Notifications->visit_original_site)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Notification Date</h3>
              <div class="well">
               <?php echo date_format($Notifications->notification_date,'d/m/Y') ;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Notification Description</h3>
              <div class="well">
               <?php echo $Notifications->notification_description;?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Link Image</h3>
              <div class="well">
              <?php 
                echo $this->Html->link(__($this->Html->image('notification/'.$Notifications->notification_image, array('alt' => 'Image','height'=>'100px', 'width'=>'100px'))), ['controller'=>'img','action' => 'notification',$Notifications->notification_image], ['escape' => false]);?>
              </div>
            </div>
