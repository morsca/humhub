<?php


use yii\db\Migration;

class m131023_164513_initial extends Migration
{

    public function up()
    {

        $this->createTable('group', array(
            'id' => 'pk',
            'space_id' => 'int DEFAULT NULL',
            'name' => 'varchar(45) DEFAULT NULL',
            'description' => 'text DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->createTable('group_admin', array(
            'id' => 'pk',
            'user_id' => 'int NOT NULL',
            'group_id' => 'int NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'int NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'int NOT NULL',
                ), '');


        $this->createTable('profile', array(
            'user_id' => 'int NOT NULL',
                ), '');

        $this->addPrimaryKey('pk_profile', 'profile', 'user_id');

        $this->createTable('profile_field', array(
            'id' => 'pk',
            'profile_field_category_id' => 'int NOT NULL',
            'module_id' => 'varchar(255) DEFAULT NULL',
            'field_type_class' => 'varchar(255) NOT NULL',
            'field_type_config' => 'text DEFAULT NULL',
            'internal_name' => 'varchar(100) NOT NULL',
            'title' => 'varchar(255) NOT NULL',
            'description' => 'text DEFAULT NULL',
            'sort_order' => 'int NOT NULL',
            'required' => 'int DEFAULT NULL',
            'show_at_registration' => 'int DEFAULT NULL',
            'editable' => 'int NOT NULL DEFAULT \'1\'',
            'visible' => 'int NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->createTable('profile_field_category', array(
            'id' => 'pk',
            'title' => 'varchar(255) NOT NULL',
            'description' => 'text NOT NULL',
            'sort_order' => 'int NOT NULL',
            'module_id' => 'int DEFAULT NULL',
            'visibility' => 'int NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');


        $this->createTable('user', array(
            'id' => 'pk',
            'guid' => 'varchar(45) DEFAULT NULL',
            'user_invite_id' => 'int DEFAULT NULL',
            'wall_id' => 'int DEFAULT NULL',
            'group_id' => 'int DEFAULT NULL',
            'status' => 'int NOT NULL DEFAULT \'2\'',
            'super_admin' => 'int NOT NULL',
            'username' => 'varchar(25) DEFAULT NULL',
            'email' => 'varchar(100) DEFAULT NULL',
            'password' => 'varchar(200) DEFAULT NULL',
            'auth_mode' => 'varchar(10) NOT NULL',
            'tags' => 'text DEFAULT NULL',
            'language' => 'varchar(5) NOT NULL',
            'receive_email_notifications' => 'int NOT NULL',
            'receive_email_messaging' => 'int NOT NULL',
            'receive_email_activities' => 'int NOT NULL',
            'last_activity_email' => 'datetime NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->createTable('user_content', array(
            'id' => 'pk',
            'user_id' => 'int NOT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'int NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'int NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'int NOT NULL',
                ), '');

        $this->createTable('user_follow', array(
            'user_follower_id' => 'int NOT NULL',
            'user_followed_id' => 'int NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->addPrimaryKey('pk_user_follow', 'user_follow', 'user_follower_id,user_followed_id');



            // May already created
            $this->createTable('user_http_session', array(
                'id' => 'char(32) NOT NULL',
                'expire' => 'int DEFAULT NULL',
                'user_id' => 'int DEFAULT NULL',
                'data' => 'bytea DEFAULT NULL',
                    ), '');
            $this->addPrimaryKey('pk_user_http_session', 'user_http_session', 'id');




        $this->createTable('user_invite', array(
            'id' => 'pk',
            'user_originator_id' => 'int DEFAULT NULL',
            'space_invite_id' => 'int DEFAULT NULL',
            'email' => 'varchar(45) NOT NULL',
            'source' => 'varchar(45) DEFAULT NULL',
            'token' => 'varchar(45) DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');


        $this->createTable('user_space_membership', array(
            'space_id' => 'int NOT NULL',
            'user_id' => 'int NOT NULL',
            'originator_user_id' => 'varchar(45) DEFAULT NULL',
            'status' => 'int DEFAULT NULL',
            'request_message' => 'text DEFAULT NULL',
            'last_visit' => 'datetime DEFAULT NULL',
            'invite_role' => 'int DEFAULT NULL',
            'admin_role' => 'int DEFAULT NULL',
            'share_role' => 'int DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');


        $this->createTable('user_module', array(
            'id' => 'pk',
            'module_id' => 'varchar(255) NOT NULL',
            'user_id' => 'int NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'int NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'int NOT NULL',
                ), '');

        $this->addPrimaryKey('pk_user_space_membership', 'user_space_membership', 'space_id,user_id');
    }

    public function down()
    {
        echo "m131023_164513_initial does not support migration down.\n";
        return false;

        $this->dropTable('user');
        $this->dropTable('user_content');
        $this->dropTable('user_follow');
        $this->dropTable('user_http_session');
        $this->dropTable('user_invite');
        $this->dropTable('user_module');
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
