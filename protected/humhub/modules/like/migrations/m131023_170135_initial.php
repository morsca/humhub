<?php


use yii\db\Migration;

class m131023_170135_initial extends Migration {

    public function up() {
        $this->createTable('like', array(
            'id' => 'pk',
            'target_user_id' => 'int NOT NULL',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'int NOT NULL',
            'created_at' => 'timestamp DEFAULT NULL',
            'created_by' => 'int DEFAULT NULL',
            'updated_at' => 'timestamp DEFAULT NULL',
            'updated_by' => 'int DEFAULT NULL',
                ), '');
    }

    public function down() {
        echo "m131023_170135_initial does not support migration down.\n";
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