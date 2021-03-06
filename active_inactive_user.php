<?php
	require_once ('library/reference.php');
	require_once ('autoload.php');
	
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	require_once('userauth.php');
	
	$userbol = new userbol();
	$localizationbol= new localizationbol();
	
	//localization
	$localized_result=$localizationbol->get_localization_by_pagename('user',1);
	while($row=$localized_result->getNext())
	{
		$localized_data[$row['localization_name']]=$row['detail'];
	}
	
	if(isset($_GET['user_id']))
	{
		$user_id=(int)$_GET['user_id'];
		$status_to_do=$_GET['status_to_do'];
		if($status_to_do=='active')
		{
			$is_active=1;
			$old_values='user_id=>'.$user_id.",is_active=>0";
			$msg = $localized_data['active_success_msg'];
		}
		else
		{
			$is_active=0;
			$old_values='user_id=>'.$user_id.",is_active=>1";
			$msg = $localized_data['inactive_success_msg'];
		}	
		$upd_result = $userbol->update_user_isactive($user_id,$is_active,$old_values);
		if($upd_result)
			$arr = array('success'=>1 , 'msg'=> $msg);
		else
			$arr = array('success'=>0 , 'msg'=> $msg);
		echo json_encode($arr);			
	}
?>