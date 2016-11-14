<?php


use yii\db\Migration;

class m140930_212528_fix_default extends Migration
{

    public function up()
    {
        $this->alterColumn('notification', 'emailed', 'int');
        $this->alterColumn('notification', 'emailed', 'SET NOT NULL');
        $this->alterColumn('notification', 'emailed', 'SET DEFAULT \'0\'');
        $this->alterColumn('notification', 'updated_by', "int");
        $this->alterColumn('notification', 'updated_by', "SET DEFAULT NULL");
        $this->alterColumn('notification', 'created_by', "int");
        $this->alterColumn('notification', 'created_by', "SET DEFAULT NULL");
    }

    public function down()
    {
        echo "m140930_212528_fix_default does not support migration down.\n";
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
