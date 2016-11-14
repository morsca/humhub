<?php


use yii\db\Migration;

class m141020_162639_fix_default extends Migration
{

    public function up()
    {

        $this->alterColumn('setting', 'value', "varchar(255)");
        $this->alterColumn('setting', 'value', "DROP NOT NULL");
        $this->alterColumn('setting', 'value', "SET DEFAULT NULL");
        $this->alterColumn('setting', 'updated_by', "int");
        $this->alterColumn('setting', 'updated_by', "DROP NOT NULL");
        $this->alterColumn('setting', 'updated_by', "SET DEFAULT NULL");
        $this->alterColumn('setting', 'created_by', "int");
        $this->alterColumn('setting', 'created_by', "DROP NOT NULL");
        $this->alterColumn('setting', 'created_by', "SET DEFAULT NULL");
        $this->alterColumn('setting', 'created_at', "datetime");
        $this->alterColumn('setting', 'created_at', "DROP NOT NULL");
        $this->alterColumn('setting', 'created_at', "SET DEFAULT NULL");
        $this->alterColumn('setting', 'updated_at', "datetime");
        $this->alterColumn('setting', 'updated_at', "DROP NOT NULL");
        $this->alterColumn('setting', 'updated_at', "SET DEFAULT NULL");
    }

    public function down()
    {
        echo "m141020_162639_fix_default does not support migration down.\n";
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
