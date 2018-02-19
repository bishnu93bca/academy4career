<div class="col-lg-12">
   <div class="container">
  <div class="row">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="<?php echo BASE_URL.'img/about.jpg'?>" alt="Profile image example" height="150" width="850" />
        <?php if(!empty($Users->picture)){?>
        <img align="left" class="fb-image-profile thumbnail" src="<?php echo $Users->picture;?>" alt="Profile image example" height="180" width="200" />
        <?php }else{?>
        <img align="left" class="fb-image-profile thumbnail" src="<?php echo BASE_URL.'img/comment_user.png'?>" alt="Profile image example" height="180" width="180" />
        <?php } ?>
        <div class="fb-profile-text">
            <h1><?php echo ucfirst($Users->first_name).' '.ucfirst($Users->last_name);?></h1>
            
        </div>
    </div>
  </div>
</div>
</div>
<div class="container">
  <div class="col-sm-12">

      <div data-spy="scroll" class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              About</a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
             Details</a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
             Tests</a>
            </li>
             <li>
              <a href="#tab_default_4" data-toggle="tab">
             Payments</a>
            </li>
            <li>
              <a href="#tab_default_5" data-toggle="tab">
              Edit Profile</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
 
              <p>
                <?=h($Users->about)?>
              </p><br>
             
              <h4 class="h4">Education </h4>
              <p><?=h($Users->college)?></p>
              
           
            </div>
            <div class="tab-pane" id="tab_default_2">
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="education">Highest Education:</label>
                      <p><?=h($Users->college)?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                      <p><?=h($Users->email)?></p>
                 </div>
                  <div class="form-group">
                     <label for="mobile">Mobile</label>
                      <p>+91-<?=h($Users->mobile)?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Address</label>
                      <p><?=h($Users->address)?></p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Date of Birth:</label>
                      <p><?=h($Users->dob)?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Gender:</label>
                      <p><?=h($Users->gender)?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Father's Name</label>
                      <p><?=h($Users->father_name)?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Reg Date</label>
                      <p><?=h($Users->created)?></p>
                 </div>

               </div>
              </div>

             
           
            </div>
            <div class="tab-pane" id="tab_default_3">
              
              <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Tuch Questions</th>
                      <th>Skip Questions</th>
                      <th>Correct Answers</th>
                      <th>Worng Answers</th>
                      <th>Time</th>
                      <th>Total Questions</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($AnswerSheet as $key => $value) {
                    // pr($value);
                    ?>
                   <tr class="success">
                      <td><?=h($value->name)?></td>
                      <td><?=h($value->tuch_question)?></td>
                      <td><?=h($value->skip)?></td>
                      <td><?=h($value->correct_answer)?></td>
                      <td><?=h($value->worng_answer)?></td>
                      <td><?php echo  gmdate("H:i:s", $value->time);?></td>
                      <td><?=h($value->total_question)?></td>
                      <td><?=h($value->created)?></td>
                    </tr>

                 <?php  } ?>
                  </tbody>
                </table> 
              </div>
          
              </div>
            </div>
             <div class="tab-pane" id="tab_default_4">
               <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Column heading</th>
                      <th>Column heading</th>
                      <th>Column heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="info">
                      <td>3</td>
                      <td>Column content</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    
                  </tbody>
                </table> 
              </div>
          
              </div>
            </div>
            <div class="tab-pane" id="tab_default_5">
               <div class="row">
               <?= $this->Form->create('',['enctype'=>"multipart/form-data"]) ?>
              <div class="col-sm-6">
                
                <div class="col-lg-12 grid">
                  <label for="first_name" >First Name</label>
                  <input type="text" class="form-control m_6 col-lg-8" name="first_name" placeholder="First Name" id="first_name" value="<?=h($Users->first_name)?>" required="">       
                </div>
        
        
          <div class="col-lg-12 grid">
            <label for="dob" >Birth Date</label>
            <input type="date" class="form-control m_6 col-lg-8" name="dob" placeholder="Father Name" id="dob" value="<?php echo $Users->dob;?>" required="">       
          </div>
        

       
        <div class="col-lg-12 grid">
            <label for="father_name" >Father Name</label>
            <input type="text" class="form-control m_6 col-lg-8" name="father_name" placeholder="Father Name" id="father_name" value="<?=h($Users->father_name)?>" required="">       
        </div>

        <div class="col-lg-12 grid">
            <label for="mobile" >Mobile</label>
            <input type="text" class="form-control m_6 col-lg-8" name="mobile" placeholder="Mobile" id="mobile" value="<?=h($Users->mobile)?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required="">       
        </div>
        
        <div class="col-lg-12 grid">
                        <label for="aadhar" >Aadhar No</label>
                        <input type="text" class="form-control m_6 col-lg-8" name="aadhar" placeholder="Aadhar No" id="aadhar" value="<?=h($Users->aadhar)?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required="">       
                    </div>
        
        <div class="col-lg-12 grid">
            <label for="address" >Address</label>
            <textarea class="form-control m_6 col-lg-8" name="address" placeholder="Address" id="address" required=""><?=h($Users->address)?></textarea>       
        </div>
              </div>
              <div class="col-sm-6">
                 <div class="col-lg-12 grid">
                    <label for="last_name" >Last Name</label>
                    <input type="text" class="form-control m_6 col-lg-8" name="last_name" placeholder="Last Name" id="last_name" value="<?=h($Users->last_name)?>" required="">       
                  </div>
                   <div class="col-lg-12 grid">
                        <label for="gender" >Gender</label>
                        <input type="text" class="form-control m_6 col-lg-8" name="gender" placeholder="Gender" id="gender" value="<?=h($Users->gender)?>" required="">       
                    </div>
                    
                    <div class="col-lg-12 grid">
                        <label for="school" >School </label>
                        <textarea class="form-control m_6 col-lg-8" name="school" placeholder="School" id="school" required=""><?=h($Users->school)?></textarea>       
                    </div>
                    <div class="col-lg-12 grid">
                        <label for="college" >College </label>
                        <textarea class="form-control m_6 col-lg-8" name="college" placeholder="College" id="college" required=""><?=h($Users->college)?></textarea>       
                    </div>
                    <div class="col-lg-12 grid">
                        <label for="last_name" >Profile Image</label>
                        <input type="file" class="form-control m_6 col-lg-6" style="    font-size: 13px!important;" name="image"  id=""  required="">       
                    </div>
                     <div class="col-lg-12 grid" style="padding-top:10px;">
                    <button class="btn btn-success col-lg-12">Update</button> 
                   </div>

               </div>
               </form>
              </div>

            </div>
          </div>
        </div>
      </div>
  
  </div>
  
</div>
<style type="text/css">
  .fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 20px 80px;
    z-index: 9;
    width: 14%; 
}

/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {

  background-color: #0fa8e3;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #d9ffff;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
 background-color: #0fa8e3;
  position: relative;
  color: #fff;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0 !important;
  color: #d9ffff;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

.menu_title {
    padding: 15px 10px;
    border-bottom: 1px solid #eee;
    margin: 0 5px;
}


@media (max-width:768px){
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 25px;
    z-index: 9;
    width: 14%; 
}
}
.h4{
padding:5px;
}
.grid{
      padding: 0 24px;
}
</style>