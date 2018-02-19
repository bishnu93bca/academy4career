<?php 
  $json=$careertests->question->name;
  $time=strtotime($careertests->question->time) - strtotime('TODAY');
  $test_name=$careertests->career_test_name;
?>
<script>
var time_st=<?php echo $time;?>;

function formatSeconds(secs)
{
    var sec_num = parseInt(secs, 10)    
    var hours   = Math.floor(sec_num / 3600) % 24
    var minutes = Math.floor(sec_num / 60) % 60
    var seconds = sec_num % 60    
    return [hours,minutes,seconds]
        .map(v => v < 10 ? "0" + v : v)
        .filter((v,i) => v !== "00" || i > 0)
        .join(":")
}

  var pos=0,test,test_status,question,choice,choices ,chA,chB,chC,correct=0,wor=0,skip=0,exit;

  var distance,time_count=0;
  var id="<?php echo $test_name;?>";
  var questions= <?php echo $json; ?>;
  time_count++;
var co = setInterval(function(){
  }, 1000);
  function _(x){
    return document.getElementById(x);
  }
  function renderQuestion(){
    test = _("test");
    exit =_("Exit");
    if(pos>=questions.length){
       test.innerHTML= "<div style='text-align: center;'><form  method='post' action='<?php echo BASE_URL;?>results/add'><input type='hidden' name='test_id' value='"+id+"'><input type='hidden' name='total_question' value='"+questions.length+"'><input type='hidden' name='tuch_question' value='"+pos+"'><input type='hidden' name='skip' value='"+skip+"'><input type='hidden' name='worng_answer' value='"+wor+"'><input type='hidden' name='correct_answer' value='"+correct+"'><input type='hidden' name='time' value='"+time_count+"'><button class='btn btn-warning'>Continue</button></form></div>";
      _("test_status").innerHTML="<center><h3>Test Complated</h3></center><br>";
      
    _("Question_no").innerHTML='Null';
    _("total_Question").innerHTML='Null';
    _("total_Marks").innerHTML='Null';
      
      pos=0;
      correct=0;
      return false;
     }
     var countdownfunction = setInterval(function(){
   distance=time_st--;
  
   if (distance < 0) {
       test.innerHTML= "<div style='text-align: center;'><form  method='post' action='<?php echo BASE_URL;?>results/add'><input type='hidden' name='test_id' value='"+id+"'><input type='hidden' name='total_question' value='"+questions.length+"'><input type='hidden' name='tuch_question' value='"+pos+"'><input type='hidden' name='skip' value='"+skip+"'><input type='hidden' name='worng_answer' value='"+wor+"'><input type='hidden' name='correct_answer' value='"+correct+"'><input type='hidden' name='time' value='"+time_count+"'><button class='btn btn-warning'>Continue</button></form></div>";
      _("test_status").innerHTML="<center><h3>Time Out </h3></center><br>";
      
    _("Question_no").innerHTML='Null';
    _("total_Question").innerHTML='Null';
    _("total_Marks").innerHTML='Null';
        return false;
    }else{
      var time=formatSeconds(distance);
   _("time").innerHTML = time;
   time_count++;
    }
}, 1000);
    // _("test_status").innerHTML= "Question" +(pos+1)+"of"+questions.length;
    _("Question_no").innerHTML=(pos+1);
    _("total_Question").innerHTML=questions.length;
    _("total_Marks").innerHTML=2*questions.length;

    test.innerHTML ="<div class='blok_1'><p><b>Q. </b>"+questions[pos][0]+"</p><div class='clearfix'></div><br><div class='para'><div class='col-lg-10'><div class='radio'><label><input type='radio' name='choices' value='A'>"+questions[pos][1]+"</label></div><div class='radio'><label><input type='radio' name='choices' value='B'>"+questions[pos][2]+"</label></div><div class='radio'><label><input type='radio' name='choices' value='C'>"+questions[pos][3]+"</label></div><div class='radio'><label><input type='radio' name='choices'  value='D'>"+questions[pos][1]+"</label></div><button onclick='checkAnswer()' class='btn btn-primary'>Save and Next</button>&nbsp;<button onclick='checkAnswer()' class='btn btn-warning'>Skip</button></div></div></div>";
    exit.innerHTML= "<form  method='post' action='<?php echo BASE_URL;?>results/add' ><input type='hidden' name='test_id' value='"+id+"'><input type='hidden' name='total_question' value='"+questions.length+"'><input type='hidden' name='tuch_question' value='"+pos+"'><input type='hidden' name='skip' value='"+skip+"'><input type='hidden' name='worng_answer' value='"+wor+"'><input type='hidden' name='correct_answer' value='"+correct+"'><input type='hidden' name='time' value='"+time_count+"'><button class='btn btn-danger'>Exit</button></form>";
    

  }
  function checkAnswer(){
    choices = document.getElementsByName('choices');
    for (var i = 0; i < choices.length; i++) {
      if(choices[i].checked){
        choice=choices[i].value;
      }
      
    }

    if(choice== undefined){
    skip++;
    console.log(skip);
    }else if(choice==questions[pos][5]){
        correct++;
      }else{
        wor++;
      }
    
    pos++;
    renderQuestion();
  }
  function submit(){
    test = _("test");
    
      // var percentages=correct/questions.length*100;
       test.innerHTML= "<div style='text-align: center;'><form  method='post' action='<?php echo BASE_URL;?>results/add'><input type='hidden' name='test_id' value='"+id+"'><input type='hidden' name='total_question' value='"+questions.length+"'><input type='hidden' name='tuch_question' value='"+pos+"'><input type='hidden' name='skip' value='"+skip+"'><input type='hidden' name='worng_answer' value='"+wor+"'><input type='hidden' name='correct_answer' value='"+correct+"'><input type='hidden' name='time' value='"+time_count+"'><button class='btn btn-warning'>Continue</button></form></div>";
      _("test_status").innerHTML="<center><h3>Test Submit</h3></center><br>";
      
    _("Question_no").innerHTML='Null';
    _("total_Question").innerHTML='Null';
    _("total_Marks").innerHTML='Null';
      return false;
     
  }
  window.addEventListener("load",renderQuestion,false);
</script>
<div class="about_top">
 <div class="container-fluid">
  
  <div class="col-md-9 column-15" style="border-right: 2px solid #ece1e1;">
        <div class="profile-widget">
             <div class="profile-widget_left">
                    <h3><?=h($careertests->career_test_name)?></h3>
                    <p>
                        <b>Question:</b> <b id="Question_no"></b>
                    </p>
               </div>
               <div class="profile-widget_right">
                   <h3>Time Remaining- <i id="time"></i></h3>
                  <p><b>Total Qustions:</b> <b id="total_Question"></b> | <b>Total marks:</b> <b id="total_Marks"></b></p>
               </div>
               <div class="clearfix"></div>
         </div>
         <div class="gallery-cursual">

          <div class="blok_1">
        <h2 id="test_status"></h2>
        <div id="test" > </div>
        <div id="counter"></div>
   
             </div>
         </div>
       
        <div class="clearfix"> </div>
    </div>

  <div class="col-lg-3 column-15">
  <img src="<?php echo $_SESSION->picture;?>" alt="" class="img-circle profile-img" style="width:47%; float: left; margin-right: 10px" /> <p style="margin-top:35px; float: left; font-size: 16px; font-weight: 600" ><?php echo ucfirst($_SESSION->first_name).' '.ucfirst($_SESSION->last_name);?></p>
  <div class="clearfix"> </div>
  <div class="profile-widget">
             <div class="profile-widget_left">
                    <h3></h3>
                    <p>
                        <a href="classified_database.html">Class - Six </a>
                    </p>
               </div>
         <div class="clearfix"> </div>
        
         <div class="col-lg-9"><button class="btn btn-success" onclick="submit()">Submit</button></div>
          <div class="col-lg-9"><div id="Exit"></div></div>
         
         
       
         
               <div class="clearfix"></div>
         </div>
  </div>
  </div>
</div>
