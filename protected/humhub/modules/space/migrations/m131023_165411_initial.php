<?php


use yii\db\Migration;

class m131023_165411_initial extends Migration {

    public function up() {
        $this->createTable('space', array(
            'id' => 'pk',
            'guid' => 'varchar(45) DEFAULT NULL',
            'wall_id' => 'int DEFAULT NULL',
            'name' => 'varchar(45) NOT NULL',
            'description' => 'text DEFAULT NULL',
            'website' => 'varchar(45) DEFAULT NULL',
            'join_policy' => 'int DEFAULT NULL',
            'visibility' => 'int DEFAULT NULL',
            'status' => 'int NOT NULL DEFAULT \'1\'',
            'tags' => 'text DEFAULT NULL',
            'created_at' => 'timestamp DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'timestamp DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->createTable('space_follow', array(
            'user_id' => 'int NOT NULL',
            'space_id' => 'int NOT NULL',
            'created_at' => 'timestamp DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'timestamp DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->addPrimaryKey('pk_space_follow', 'space_follow', 'user_id,space_id');

        $this->createTable('space_module', array(
            'id' => 'pk',
            'module_id' => 'varchar(255) NOT NULL',
            'space_id' => 'int NOT NULL',
            'created_at' => 'timestamp NOT NULL',
            'created_by' => 'int NOT NULL',
            'updated_at' => 'timestamp NOT NULL',
            'updated_by' => 'int NOT NULL',
                ), '');
    }

    public function down() {
        echo "m131023_165411_initial does not support migration down.\n";
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