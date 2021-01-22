<?php
/*
$arr=json_encode(array(
    "phone"=>"91**********",
	"body"=>"Hello"
	));
	$url="https://eu136.chat-api.com/instance212194/message?token=4zue0qagqisgxzpf";
	*/
	$arr=json_encode(array(
    "phone"=>"916380568195",
	"body"=>"https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg",
    "filename"=> "NatureCover2001.jpg"
	));
	$url="https://eu136.chat-api.com/instance212194/sendFile?token=4zue0qagqisgxzpf";
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array(
		'content-type:application/json',
		'content-length:'.strlen($arr)
	));
	$result=curl_exec($ch);
	curl_close($ch);
	echo $result;
	?>
