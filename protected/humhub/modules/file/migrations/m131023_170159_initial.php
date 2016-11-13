<?php


use yii\db\Migration;

class m131023_170159_initial extends Migration
{

    public function up()
    {
        $this->createTable('file', array(
            'id' => 'pk',
            'guid' => 'varchar(45) DEFAULT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'int NOT NULL',
            'file_name' => 'varchar(255) DEFAULT NULL',
            'title' => 'varchar(255) DEFAULT NULL',
            'mime_type' => 'varchar(150) DEFAULT NULL',
            'size' => 'varchar(45) DEFAULT NULL',
            'created_at' => 'timestamp DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'timestamp DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');
    }

    public function down()
    {
        echo "m131023_170159_initial does not support migration down.\n";
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
