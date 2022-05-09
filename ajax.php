<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == "save_settings"){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}

// Start of Save_LOan_Type
if($action == "save_loan_type"){
	$save = $crud->save_loan_type();
	if($save)
		echo $save;
}

// End of Save_Loan_Type

// Start of Save_LOan_Type
if($action == "save_save_type"){
	$save = $crud->save_save_type();
	if($save)
		echo $save;
}

// End of Save_Loan_Type

// Start of delete_loan_type
if($action == "delete_loan-type"){
	$save = $crud->delete_loan_type();
	if($save)
		echo $save;
}
// End of delete_loan_type

// start of save_plan
if($action == "save_plan"){
	$save = $crud->save_plan();
	if($save)
		echo $save;
}
// end of save_plan

// start of delete_plan
if($action == "delete_plan")
	$save = $crud->delete_plan();
	if($save)
		echo $save;
// }end of delete_plan

// start of save borrower
if($action == "save_borrower"){
	$save = $crud->save_borrower();
	if($save)
		echo $save;
}
// end of save_borrrower

// Save Member
if($action == "save_member"){
	$save = $crud->save_member();
	if($save)
		echo $save;
}
// end of save member

// start of delete_memeber
if($action == "delete_member"){
	$save = $crud->delete_member();
	if($save)
		echo $save;
}
// end od deelte_member

// start of delete_member
if($action == "delete_member"){
	$save = $crud->delete_member();
	if($save)
		echo $save;
}
// End of delete_ember

// start of delete_borrower
if($action == "delete_borrower"){
	$save = $crud->delete_borrower();
	if($save)
		echo $save;
}
// end of delete_borrower

if($action == "save_loan"){
	$save = $crud->save_loan();
	if($save)
		echo $save;
}
if($action == "delete_loan"){
	$save = $crud->delete_loan();
	if($save)
		echo $save;
}

if($action == "save_payment"){
	$save = $crud->save_payment();
	if($save)
		echo $save;
}
if($action == "delete_payment"){
	$save = $crud->delete_payment();
	if($save)
		echo $save;
}


