<?php

use yii\db\Migration;

class m160818_0644444_access_token_table extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('user_access_token', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'token' => $this->string(32)->notNull(),
        ]);
        $this->addForeignKey('fk_user_access_token', 'user_access_token', 'user_id', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('user_access_token');

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
