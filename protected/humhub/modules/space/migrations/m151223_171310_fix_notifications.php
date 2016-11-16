<?php


use yii\db\Migration;

/**
 * Fix broken notification with invalid originator_user_ids
 */
class m151223_171310_fix_notifications extends Migration
{

    public function up()
    {
        $query = new \yii\db\Query();
        $query->select('notification.id')->from('notification');
        $query->andWhere(['or',
            ['class' => 'humhub\modules\space\notifications\Invite'],
            ['class' => 'humhub\modules\space\notifications\InviteAccepted'],
            ['class' => 'humhub\modules\space\notifications\InviteDeclined'],
            ['class' => 'humhub\modules\space\notifications\ApprovalRequest'],
            ['class' => 'humhub\modules\space\notifications\ApprovalRequestAccepted'],
            ['class' => 'humhub\modules\space\notifications\ApprovalRequestDeclined']
        ]);

        $query->leftJoin('user u', 'notification.originator_user_id=u.id');
        $query->andWhere('u.id IS NULL');

        foreach ($query->all() as $notification) {
            $this->delete('notification', ['id' => $notification['id']]);
        }
    }

    public function down()
    {
        echo "m151223_171310_fix_notifications cannot be reverted.\n";

        return false;
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
