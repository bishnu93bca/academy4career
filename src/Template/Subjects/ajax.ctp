<?php
foreach ($Subjects as $key => $value) {
	$arr[]= array('id'=>$value->subject_id,'name'=>$value->subject_name);
}
if(empty($arr)){
	$arr[]=array('id'=>0,'name'=>'select');
}
echo json_encode($arr);