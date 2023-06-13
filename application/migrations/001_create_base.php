<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_base extends CI_Migration {

	public function up() {

		## Create Table addition
		$this->dbforge->add_field(array(
			'addi_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'salary_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'basic' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'medical' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'house_rent' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'conveyance' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("addi_id",true);
		$this->dbforge->create_table("addition", TRUE);
		$this->db->query('ALTER TABLE  `addition` ENGINE = InnoDB');

		## Create Table address
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'city' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'country' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'address' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'type' => array(
				'type' => 'ENUM("Present","Permanent")',
				'null' => TRUE,
				'default' => 'Present',

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("address", TRUE);
		$this->db->query('ALTER TABLE  `address` ENGINE = InnoDB');

		## Create Table assets
		$this->dbforge->add_field(array(
			'ass_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'catid' => array(
				'type' => 'VARCHAR',
				'constraint' => 14,
				'null' => FALSE,

			),
			'ass_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'ass_brand' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'ass_model' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'ass_code' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'configuration' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'purchasing_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'ass_price' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'ass_qty' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'in_stock' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("ass_id",true);
		$this->dbforge->create_table("assets", TRUE);
		$this->db->query('ALTER TABLE  `assets` ENGINE = InnoDB');

		## Create Table assets_category
		$this->dbforge->add_field(array(
			'cat_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'cat_status' => array(
				'type' => 'ENUM("ASSETS","LOGISTIC")',
				'null' => FALSE,
				'default' => 'ASSETS',

			),
			'cat_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("cat_id",true);
		$this->dbforge->create_table("assets_category", TRUE);
		$this->db->query('ALTER TABLE  `assets_category` ENGINE = InnoDB');

		## Create Table assign_leave
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'app_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 11,
				'null' => FALSE,

			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'type_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'day' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'hour' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE,

			),
			'total_day' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'dateyear' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("assign_leave", TRUE);
		$this->db->query('ALTER TABLE  `assign_leave` ENGINE = InnoDB');

		## Create Table assign_task
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'task_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'project_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'assign_user' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'user_type' => array(
				'type' => 'ENUM("Team Head","Collaborators")',
				'null' => FALSE,
				'default' => 'Collaborators',

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("assign_task", TRUE);
		$this->db->query('ALTER TABLE  `assign_task` ENGINE = InnoDB');

		## Create Table attendance
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'atten_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'signin_time' => array(
				'type' => 'TIME',
				'null' => TRUE,

			),
			'signout_time' => array(
				'type' => 'TIME',
				'null' => TRUE,

			),
			'working_hour' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'place' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE,

			),
			'absence' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'overtime' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'earnleave' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("attendance", TRUE);
		$this->db->query('ALTER TABLE  `attendance` ENGINE = InnoDB');

		## Create Table bank_info
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'holder_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'bank_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'branch_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'account_number' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'account_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("bank_info", TRUE);
		$this->db->query('ALTER TABLE  `bank_info` ENGINE = InnoDB');

		## Create Table deduction
		$this->dbforge->add_field(array(
			'de_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'salary_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'provident_fund' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'bima' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'tax' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'others' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("de_id",true);
		$this->dbforge->create_table("deduction", TRUE);
		$this->db->query('ALTER TABLE  `deduction` ENGINE = InnoDB');

		## Create Table department
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'dep_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => FALSE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("department", TRUE);
		$this->db->query('ALTER TABLE  `department` ENGINE = InnoDB');

		## Create Table desciplinary
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'action' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("desciplinary", TRUE);
		$this->db->query('ALTER TABLE  `desciplinary` ENGINE = InnoDB');

		## Create Table designation
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'des_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => FALSE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("designation", TRUE);
		$this->db->query('ALTER TABLE  `designation` ENGINE = InnoDB');

		## Create Table earned_leave
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'present_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'hour' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("earned_leave", TRUE);
		$this->db->query('ALTER TABLE  `earned_leave` ENGINE = InnoDB');

		## Create Table education
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'edu_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'institute' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'result' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'year' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("education", TRUE);
		$this->db->query('ALTER TABLE  `education` ENGINE = InnoDB');

		## Create Table emp_assets
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'assets_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'given_date' => array(
				'type' => 'DATE',
				'null' => FALSE,

			),
			'return_date' => array(
				'type' => 'DATE',
				'null' => FALSE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("emp_assets", TRUE);
		$this->db->query('ALTER TABLE  `emp_assets` ENGINE = InnoDB');

		## Create Table emp_experience
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'exp_company' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'exp_com_position' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'exp_com_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'exp_workduration' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("emp_experience", TRUE);
		$this->db->query('ALTER TABLE  `emp_experience` ENGINE = InnoDB');

		## Create Table emp_leave
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'typeid' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'leave_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'leave_duration' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'apply_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'reason' => array(
				'type' => 'VARCHAR',
				'constraint' => 1024,
				'null' => TRUE,

			),
			'leave_status' => array(
				'type' => 'ENUM("Approve","Not Approve","Rejected")',
				'null' => FALSE,
				'default' => 'Not Approve',

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("emp_leave", TRUE);
		$this->db->query('ALTER TABLE  `emp_leave` ENGINE = InnoDB');

		## Create Table emp_penalty
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'penalty_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'penalty_desc' => array(
				'type' => 'TEXT',
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("emp_penalty", TRUE);
		$this->db->query('ALTER TABLE  `emp_penalty` ENGINE = InnoDB');

		## Create Table emp_salary
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'type_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'total' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("emp_salary", TRUE);
		$this->db->query('ALTER TABLE  `emp_salary` ENGINE = InnoDB');

		## Create Table emp_training
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'trainig_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'emp_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
		));

		$this->dbforge->create_table("emp_training", TRUE);
		$this->db->query('ALTER TABLE  `emp_training` ENGINE = InnoDB');

		## Create Table employee
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'em_code' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'des_id' => array(
				'type' => 'INT',
				'null' => TRUE,

			),
			'dep_id' => array(
				'type' => 'INT',
				'null' => TRUE,

			),
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'em_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'em_password' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => FALSE,

			),
			'em_role' => array(
				'type' => 'ENUM("ADMIN","EMPLOYEE","SUPER ADMIN")',
				'null' => FALSE,
				'default' => 'EMPLOYEE',

			),
			'em_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'status' => array(
				'type' => 'ENUM("ACTIVE","INACTIVE")',
				'null' => FALSE,
				'default' => 'ACTIVE',

			),
			'em_gender' => array(
				'type' => 'ENUM("Male","Female")',
				'null' => FALSE,
				'default' => 'Male',

			),
			'em_phone' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'em_birthday' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'em_blood_group' => array(
				'type' => 'ENUM("O+","O-","A+","A-","B+","B-","AB+","OB+")',
				'null' => TRUE,

			),
			'em_joining_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'em_contact_end' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'em_image' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'em_nid' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("employee", TRUE);
		$this->db->query('ALTER TABLE  `employee` ENGINE = InnoDB');

		## Create Table employee_file
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'em_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'file_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'file_url' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("employee_file", TRUE);
		$this->db->query('ALTER TABLE  `employee_file` ENGINE = InnoDB');

		## Create Table field_visit
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'project_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => FALSE,

			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'field_location' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => FALSE,

			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'approx_end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 28,
				'null' => FALSE,

			),
			'total_days' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'notes' => array(
				'type' => 'VARCHAR',
				'constraint' => 500,
				'null' => FALSE,

			),
			'actual_return_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 28,
				'null' => FALSE,

			),
			'status' => array(
				'type' => 'ENUM("Approved","Not Approve","Rejected")',
				'null' => FALSE,
				'default' => 'Not Approve',

			),
			'attendance_updated' => array(
				'type' => 'VARCHAR',
				'constraint' => 11,
				'null' => FALSE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("field_visit", TRUE);
		$this->db->query('ALTER TABLE  `field_visit` ENGINE = InnoDB');

		## Create Table holiday
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'holiday_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'from_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'to_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'number_of_days' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'year' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("holiday", TRUE);
		$this->db->query('ALTER TABLE  `holiday` ENGINE = InnoDB');

		## Create Table leave_types
		$this->dbforge->add_field(array(
			'type_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => FALSE,

			),
			'leave_day' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE,

			),
			'status' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE,
				'default' => '1',

			),
		));
		$this->dbforge->add_key("type_id",true);
		$this->dbforge->create_table("leave_types", TRUE);
		$this->db->query('ALTER TABLE  `leave_types` ENGINE = InnoDB');

		## Create Table loan
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'amount' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'interest_percentage' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'total_amount' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'total_pay' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'total_due' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'installment' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'loan_number' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'loan_details' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'approve_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'install_period' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'status' => array(
				'type' => 'ENUM("Granted","Deny","Pause","Done")',
				'null' => FALSE,
				'default' => 'Pause',

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("loan", TRUE);
		$this->db->query('ALTER TABLE  `loan` ENGINE = InnoDB');

		## Create Table loan_installment
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'loan_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'loan_number' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'install_amount' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'pay_amount' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'app_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'receiver' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'install_no' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'notes' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("loan_installment", TRUE);
		$this->db->query('ALTER TABLE  `loan_installment` ENGINE = InnoDB');

		## Create Table logistic_asset
		$this->dbforge->add_field(array(
			'log_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'qty' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'entry_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("log_id",true);
		$this->dbforge->create_table("logistic_asset", TRUE);
		$this->db->query('ALTER TABLE  `logistic_asset` ENGINE = InnoDB');

		## Create Table logistic_assign
		$this->dbforge->add_field(array(
			'ass_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'asset_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'assign_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'project_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'task_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'log_qty' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'back_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'back_qty' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'remarks' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("ass_id",true);
		$this->dbforge->create_table("logistic_assign", TRUE);
		$this->db->query('ALTER TABLE  `logistic_assign` ENGINE = InnoDB');

		## Create Table notice
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'TEXT',
				'null' => FALSE,

			),
			'file_url' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("notice", TRUE);
		$this->db->query('ALTER TABLE  `notice` ENGINE = InnoDB');

		## Create Table owner
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'owner_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => FALSE,

			),
			'owner_position' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'note' => array(
				'type' => 'INT',
				'null' => TRUE,

			),
		));

		$this->dbforge->create_table("owner", TRUE);
		$this->db->query('ALTER TABLE  `owner` ENGINE = InnoDB');

		## Create Table pay_salary
		$this->dbforge->add_field(array(
			'pay_id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'type_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'month' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'year' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'paid_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'total_days' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'basic' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'medical' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'house_rent' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'bonus' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'bima' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'tax' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'provident_fund' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'loan' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'total_pay' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'addition' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'diduction' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'status' => array(
				'type' => 'ENUM("Paid","Process")',
				'null' => TRUE,
				'default' => 'Process',

			),
			'paid_type' => array(
				'type' => 'ENUM("Hand Cash","Bank")',
				'null' => FALSE,
				'default' => 'Bank',

			),
		));
		$this->dbforge->add_key("pay_id",true);
		$this->dbforge->create_table("pay_salary", TRUE);
		$this->db->query('ALTER TABLE  `pay_salary` ENGINE = InnoDB');

		## Create Table penalty
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'penalty_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => FALSE,

			),
			'status' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE,
				'default' => '1',

			),
		));

		$this->dbforge->create_table("penalty", TRUE);
		$this->db->query('ALTER TABLE  `penalty` ENGINE = InnoDB');

		## Create Table pro_expenses
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'pro_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'assign_to' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'details' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'amount' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("pro_expenses", TRUE);
		$this->db->query('ALTER TABLE  `pro_expenses` ENGINE = InnoDB');

		## Create Table pro_notes
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'assign_to' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'pro_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'details' => array(
				'type' => 'VARCHAR',
				'constraint' => 1024,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("pro_notes", TRUE);
		$this->db->query('ALTER TABLE  `pro_notes` ENGINE = InnoDB');

		## Create Table pro_task
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'pro_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'task_title' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 2048,
				'null' => TRUE,

			),
			'task_type' => array(
				'type' => 'ENUM("Office","Field")',
				'null' => FALSE,
				'default' => 'Office',

			),
			'status' => array(
				'type' => 'ENUM("running","complete","cancel")',
				'null' => TRUE,
				'default' => 'running',

			),
			'location' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'return_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'total_days' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'create_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'approve_status' => array(
				'type' => 'ENUM("Approved","Not Approve","Rejected")',
				'null' => FALSE,
				'default' => 'Not Approve',

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("pro_task", TRUE);
		$this->db->query('ALTER TABLE  `pro_task` ENGINE = InnoDB');

		## Create Table pro_task_assets
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'pro_task_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'assign_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("pro_task_assets", TRUE);
		$this->db->query('ALTER TABLE  `pro_task_assets` ENGINE = InnoDB');

		## Create Table project
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'pro_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'pro_start_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'pro_end_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'pro_description' => array(
				'type' => 'VARCHAR',
				'constraint' => 1024,
				'null' => TRUE,

			),
			'pro_summary' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'pro_status' => array(
				'type' => 'ENUM("upcoming","complete","running")',
				'null' => FALSE,
				'default' => 'running',

			),
			'progress' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("project", TRUE);
		$this->db->query('ALTER TABLE  `project` ENGINE = InnoDB');

		## Create Table project_file
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'pro_id' => array(
				'type' => 'INT',
				'null' => FALSE,

			),
			'file_details' => array(
				'type' => 'VARCHAR',
				'constraint' => 1028,
				'null' => TRUE,

			),
			'file_url' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'assigned_to' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("project_file", TRUE);
		$this->db->query('ALTER TABLE  `project_file` ENGINE = InnoDB');

		## Create Table salary_type
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'salary_type' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'create_date' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("salary_type", TRUE);
		$this->db->query('ALTER TABLE  `salary_type` ENGINE = InnoDB');

		## Create Table settings
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'sitelogo' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'sitetitle' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'copyright' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'contact' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'currency' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'symbol' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'system_email' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'address' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'address2' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => FALSE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("settings", TRUE);
		$this->db->query('ALTER TABLE  `settings` ENGINE = InnoDB');

		## Create Table social_media
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'emp_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'facebook' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'twitter' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'google_plus' => array(
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => TRUE,

			),
			'skype_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("social_media", TRUE);
		$this->db->query('ALTER TABLE  `social_media` ENGINE = InnoDB');

		## Create Table to-do_list
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'null' => FALSE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type' => 'VARCHAR',
				'constraint' => 64,
				'null' => TRUE,

			),
			'to_dodata' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
				'null' => TRUE,

			),
			'date' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE,

			),
			'value' => array(
				'type' => 'VARCHAR',
				'constraint' => 14,
				'null' => TRUE,

			),
		));
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("to-do_list", TRUE);
		$this->db->query('ALTER TABLE  `to-do_list` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table addition ##
		$this->dbforge->drop_table("addition", TRUE);
		### Drop table address ##
		$this->dbforge->drop_table("address", TRUE);
		### Drop table assets ##
		$this->dbforge->drop_table("assets", TRUE);
		### Drop table assets_category ##
		$this->dbforge->drop_table("assets_category", TRUE);
		### Drop table assign_leave ##
		$this->dbforge->drop_table("assign_leave", TRUE);
		### Drop table assign_task ##
		$this->dbforge->drop_table("assign_task", TRUE);
		### Drop table attendance ##
		$this->dbforge->drop_table("attendance", TRUE);
		### Drop table bank_info ##
		$this->dbforge->drop_table("bank_info", TRUE);
		### Drop table deduction ##
		$this->dbforge->drop_table("deduction", TRUE);
		### Drop table department ##
		$this->dbforge->drop_table("department", TRUE);
		### Drop table desciplinary ##
		$this->dbforge->drop_table("desciplinary", TRUE);
		### Drop table designation ##
		$this->dbforge->drop_table("designation", TRUE);
		### Drop table earned_leave ##
		$this->dbforge->drop_table("earned_leave", TRUE);
		### Drop table education ##
		$this->dbforge->drop_table("education", TRUE);
		### Drop table emp_assets ##
		$this->dbforge->drop_table("emp_assets", TRUE);
		### Drop table emp_experience ##
		$this->dbforge->drop_table("emp_experience", TRUE);
		### Drop table emp_leave ##
		$this->dbforge->drop_table("emp_leave", TRUE);
		### Drop table emp_penalty ##
		$this->dbforge->drop_table("emp_penalty", TRUE);
		### Drop table emp_salary ##
		$this->dbforge->drop_table("emp_salary", TRUE);
		### Drop table emp_training ##
		$this->dbforge->drop_table("emp_training", TRUE);
		### Drop table employee ##
		$this->dbforge->drop_table("employee", TRUE);
		### Drop table employee_file ##
		$this->dbforge->drop_table("employee_file", TRUE);
		### Drop table field_visit ##
		$this->dbforge->drop_table("field_visit", TRUE);
		### Drop table holiday ##
		$this->dbforge->drop_table("holiday", TRUE);
		### Drop table leave_types ##
		$this->dbforge->drop_table("leave_types", TRUE);
		### Drop table loan ##
		$this->dbforge->drop_table("loan", TRUE);
		### Drop table loan_installment ##
		$this->dbforge->drop_table("loan_installment", TRUE);
		### Drop table logistic_asset ##
		$this->dbforge->drop_table("logistic_asset", TRUE);
		### Drop table logistic_assign ##
		$this->dbforge->drop_table("logistic_assign", TRUE);
		### Drop table notice ##
		$this->dbforge->drop_table("notice", TRUE);
		### Drop table owner ##
		$this->dbforge->drop_table("owner", TRUE);
		### Drop table pay_salary ##
		$this->dbforge->drop_table("pay_salary", TRUE);
		### Drop table penalty ##
		$this->dbforge->drop_table("penalty", TRUE);
		### Drop table pro_expenses ##
		$this->dbforge->drop_table("pro_expenses", TRUE);
		### Drop table pro_notes ##
		$this->dbforge->drop_table("pro_notes", TRUE);
		### Drop table pro_task ##
		$this->dbforge->drop_table("pro_task", TRUE);
		### Drop table pro_task_assets ##
		$this->dbforge->drop_table("pro_task_assets", TRUE);
		### Drop table project ##
		$this->dbforge->drop_table("project", TRUE);
		### Drop table project_file ##
		$this->dbforge->drop_table("project_file", TRUE);
		### Drop table salary_type ##
		$this->dbforge->drop_table("salary_type", TRUE);
		### Drop table settings ##
		$this->dbforge->drop_table("settings", TRUE);
		### Drop table social_media ##
		$this->dbforge->drop_table("social_media", TRUE);
		### Drop table to-do_list ##
		$this->dbforge->drop_table("to-do_list", TRUE);

	}
}