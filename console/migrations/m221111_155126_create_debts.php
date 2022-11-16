<?php

use yii\db\Migration;

/**
 * Class m221111_155126_create_debts
 */
class m221111_155126_create_debts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%debts}}', [
            'id'=>$this->primaryKey(),
            'order_id'=>$this->integer()->null(),
            'date'=>$this->string(255)->null(),
            'status'=>$this->integer()->defaultValue(0),
            'status_pay'=>$this->string(255)->null(),
            'created_at'=>$this->integer()->null(),
            'updated_at'=>$this->integer()->null(),
            'created_by'=>$this->integer()->null(),
            'updated_by'=>$this->integer()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%debts}}');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221111_155126_create_debts cannot be reverted.\n";

        return false;
    }
    */
}
