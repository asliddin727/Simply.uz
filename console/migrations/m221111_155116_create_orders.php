<?php

use yii\db\Migration;

/**
 * Class m221111_155116_create_orders
 */
class m221111_155116_create_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id'=>$this->primaryKey(),
            'port'=>$this->integer()->null(),
            'url'=>$this->text()->null(),
            'centre_id'=>$this->integer()->null(),
            'fullName'=>$this->string(255)->null(),
            'centre_name'=>$this->string(255)->null(),
            'date'=>$this->string(255)->null(),
            'create_date'=>$this->date('Y-m-d')->null(),
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
        $this->dropTable('{{%orders}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221111_155116_create_orders cannot be reverted.\n";

        return false;
    }
    */
}
