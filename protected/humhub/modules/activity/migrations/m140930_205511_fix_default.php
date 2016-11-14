<?php


use yii\db\Migration;

class m140930_205511_fix_default extends Migration
{

    public function up()
    {
        $this->alterColumn('activity', 'module', "TYPE varchar(100) SET DEFAULT ''");
        $this->alterColumn('activity', 'object_model', "TYPE varchar(100) SET DEFAULT ''");
        $this->alterColumn('activity', 'object_id', "TYPE varchar(100) SET DEFAULT ''");
    }

    public function down()
    {
        echo "m140930_205511_fix_default does not support migration down.\n";
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
