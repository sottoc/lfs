<?php
class student_predefinebol{

	//----------student predefine setup----------//
		function get_student_predefine_list($offset, $rpage ,$sorting,$cri_arr)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->get_student_predefine_list($offset, $rpage ,$sorting,$cri_arr);
			return $result;
		}
		function check_duplicate_studentID($studentID,$id =0)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->check_duplicate_studentID($studentID,$id);
			return $result;
		}
		function check_duplicate_stunameandparname_updating($edt_txt_student_name,$edt_txt_parent_name,$edt_hid_participant_id)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->check_duplicate_stunameandparname_updating($edt_txt_student_name,$edt_txt_parent_name,$edt_hid_participant_id);
			return $result;
		}
		function save_student_predefine($student_predefineinfo)
		{
			$student_predefinedal=new student_predefinedal();		
			$result=$student_predefinedal->save_student_predefine($student_predefineinfo);
			return $result;
		}
		function get_student_predefine_byid($predefine_participant_id)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->get_student_predefine_byid($predefine_participant_id);
			return $result;
		}
	
		function update_student_predefine_uploadfile($student_predefineinfo)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->update_student_predefine_uploadfile($student_predefineinfo);
			return $result;
		}

		function update_student_predefine($student_predefineinfo,$edt_hid_student_values)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->update_student_predefine($student_predefineinfo,$edt_hid_student_values);
			return $result;
		}
		
		function delete_student_predefine($predefine_participant_id)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->delete_student_predefine($predefine_participant_id);
			return $result;
		}

		function select_allergyfoods_byid($id)
		{
			$student_predefinedal = new student_predefinedal();
			$result = $student_predefinedal -> select_allergyfoods_byid($id);
			return $result;
		}
	
		function delete_participant_food_allergy($predefine_participant_id)
		{
			$student_predefinedal=new student_predefinedal();
			$result=$student_predefinedal->delete_participant_food_allergy($predefine_participant_id);
			return $result;
		}
}
?>