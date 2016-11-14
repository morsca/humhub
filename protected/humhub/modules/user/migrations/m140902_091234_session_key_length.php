<?php


use yii\db\Migration;

class m140902_091234_session_key_length extends Migration
{

    public function up()
    {
    try {
        $this->alterColumn('user_http_session', 'id', 'char(255)');
        } catch (Exception $ex) {

                }
    }

    public function down()
    {
        echo "m140902_091234_session_key_length does not support migration down.\n";
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
