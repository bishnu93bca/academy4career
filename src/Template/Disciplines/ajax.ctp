<?php
foreach ($Disciplines as $key => $value) {
	$arr[]= array('id'=>$value->discipline_id,'name'=>$value->discipline_name);
}
if(empty($arr)){
	$arr[]=array('id'=>0,'name'=>'select');
}
echo json_encode($arr);