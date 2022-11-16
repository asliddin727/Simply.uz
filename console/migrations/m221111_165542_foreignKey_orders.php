<?php

use yii\db\Migration;

/**
 * Class m221111_165542_foreignKey_orders
 */
class m221111_165542_foreignKey_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk_orders_id_debts',
            'debts',
            'order_id',
            'orders',
            'id',
            'CASCADE',
            'CASCADE',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_orders_id_debts',
            'debts'
        );
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221111_165542_foreignKey_orders cannot be reverted.\n";

        return false;
    }
    */
}
