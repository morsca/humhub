<?php


use yii\db\Migration;

class m131023_170033_initial extends Migration
{

    public function up()
    {
        $this->createTable('notification', array(
            'id' => 'pk',
            'class' => 'varchar(100) NOT NULL',
            'user_id' => 'int NOT NULL',
            'seen' => 'int DEFAULT NULL',
            'source_object_model' => 'varchar(100) DEFAULT NULL',
            'source_object_id' => 'int DEFAULT NULL',
            'target_object_model' => 'varchar(100) DEFAULT NULL',
            'target_object_id' => 'int DEFAULT NULL',
            'space_id' => 'int DEFAULT NULL',
            'emailed' => 'int NOT NULL',
            'created_at' => 'datetime NOT NULL',
            'created_by' => 'int NOT NULL',
            'updated_at' => 'datetime NOT NULL',
            'updated_by' => 'int NOT NULL',
                ), '');
    }

    public function down()
    {
        echo "m131023_170033_initial does not support migration down.\n";
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
