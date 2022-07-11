<?php
include('config.php');
include('api.php');
$arr['topic']='Konsultasi RSUD Jombang';
$arr['start_date']=date('2022-07-10 09:30:00');
$arr['duration']=30;
$arr['password']='jombang';
$arr['type']='9';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Id Meeting: ".$result->id."<br/>";
	echo "Password: ".$result->password."<br/>";
	echo "Start Time: ".$result->start_time."<br/>";
	echo "Duration: ".$result->duration."<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
