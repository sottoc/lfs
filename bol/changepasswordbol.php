<?php
class changepasswordbol{

	function checktochangepass($user_id,$oldpass)
	{
		$changepassworddal=new changepassworddal();
		$result=$changepassworddal->checktochangepass($user_id,$oldpass);
		return $result;
	}
	function changepassword($newpassword,$user_id)
	{
		$changepassworddal=new changepassworddal();
		$result=$changepassworddal->changepassword($newpassword,$user_id);
		return $result;
	}
	
	function checkuseridandpassword($password,$login_user_id)
	{
		$changepassworddal=new changepassworddal();
		$result=$changepassworddal->checkuseridandpassword($password,$login_user_id);
		return $result;
	}
}
?>