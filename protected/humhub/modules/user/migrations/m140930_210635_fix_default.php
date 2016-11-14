<?php


use yii\db\Migration;

class m140930_210635_fix_default extends Migration
{
	public function up()
	{
            $this->alterColumn('user', 'super_admin', "int");
            $this->alterColumn('user', 'super_admin', "SET NOT NULL ");
            $this->alterColumn('user', 'super_admin', "SET DEFAULT '0'");
            $this->alterColumn('user', 'language', "varchar(5)");
            $this->alterColumn('user', 'language', "SET DEFAULT NULL");

            $this->alterColumn('profile_field', 'sort_order', "int");
            $this->alterColumn('profile_field', 'sort_order', "SET NOT NULL");
            $this->alterColumn('profile_field', 'sort_order', "SET DEFAULT '100'");
            $this->alterColumn('profile_field', 'visible', "int");
            $this->alterColumn('profile_field', 'visible', "SET NOT NULL");
            $this->alterColumn('profile_field', 'visible', "SET DEFAULT '1'");

            $this->alterColumn('profile_field_category', 'sort_order', "int");
            $this->alterColumn('profile_field_category', 'sort_order', "SET NOT NULL");
            $this->alterColumn('profile_field_category', 'sort_order', "SET DEFAULT '100'");
            $this->alterColumn('profile_field_category', 'visibility', "int");
            $this->alterColumn('profile_field_category', 'visibility', "SET NOT NULL");
            $this->alterColumn('profile_field_category', 'visibility', "SET DEFAULT '1'");

            $this->alterColumn('user_content', 'updated_by', "int");
            $this->alterColumn('user_content', 'updated_by', "SET DEFAULT NULL");
            $this->alterColumn('user_content', 'created_by', "int");
            $this->alterColumn('user_content', 'created_by', "SET DEFAULT NULL");

            
	}

	public function down()
	{
		echo "m140930_210635_fix_default does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}