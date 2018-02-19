
<div class="about_top">

  <div class="container-fluid">
<center><h3><u>View</u></h3></center>
  <div class="col-md-12">
       <div class="col-lg-12 alltest">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Id</th>
      <th>Question Name</th>
      <th>Answer</th>
      <th>Right Answer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TestSheet as $key => $value) {
    if($value->answer==$value->question->answer){$id='btn btn-success';$icon='<i class="fa fa-check fa-lg"></i>';}else{$id='btn btn-danger';$icon='<i class="fa fa-times fa-lg"></i>';} ?>
    <tr class="info">
      <td><?=h($value->question->id)?></td>
      <td><?=h($value->question->name)?></td>
      <td><span class="<?=h($id)?>"><?=h($value->answer)?> <?php echo $icon;?></span></td>
      <td><span class="btn btn-success"><?=h($value->question->answer)?></span></td>
    </tr>
  <?php $id=''; } ?>
  </tbody>
</table> 
</div></div></div></div>