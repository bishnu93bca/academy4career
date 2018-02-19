<center><h3>Students Test Series</h3> </center> 
              
            <div class="col-md-12 form-group1 group-mail">
              <h3>Class</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->clas->class_name)?>
              </div>
            </div><div class="col-md-12 form-group1 group-mail">
              <h3>Subject</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->subject->subject_name)?>
              </div>
            </div><div class="col-md-12 form-group1 group-mail">
              <h3>Student Test Series</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->students_test_series->student_test_series_name)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Answer</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->answered)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Right Answe</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->right_answer)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Answer Status</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->answer_status)?>
              </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <h3>Question Attempted</h3> 
              <div class="well">
               <?=h($StudentsTestSeriesResults->question_attempted)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Question Unattempted</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->question_unattempted)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Test Given Time</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->test_given_time)?>
              </div>
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <h3>Test Completion Duration</h3>
              <div class="well">
               <?=h($StudentsTestSeriesResults->test_completion_duration)?>
              </div>
            </div>
 <script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>

<body onload="startTime()">
<div id="txt"></div>