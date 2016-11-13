<?php


use yii\db\Migration;

class m131023_165625_initial extends Migration
{

    public function up()
    {

        $this->createTable('wall', array(
            'id' => 'pk',
            'type' => 'varchar(45) DEFAULT NULL',
            'object_model' => 'varchar(50) NOT NULL',
            'object_id' => 'int NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');

        $this->createTable('wall_entry', array(
            'id' => 'pk',
            'wall_id' => 'int NOT NULL',
            'content_id' => 'int NOT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');


        $this->createTable('content', array(
            'id' => 'pk',
            'guid' => 'varchar(45) NOT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'int NOT NULL',
            'visibility' => 'int DEFAULT NULL',
            'sticked' => 'int DEFAULT NULL',
            'archived' => 'text DEFAULT NULL',
            'space_id' => 'int DEFAULT NULL',
            'user_id' => 'int DEFAULT NULL',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');
    }

    public function down()
    {
        echo "m131023_165625_initial does not support migration down.\n";
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
