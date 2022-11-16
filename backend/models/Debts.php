<?php

namespace backend\models;

use common\models\Debts as ModelsDebts;

class Debts extends ModelsDebts{

    public static function tableName()
    {
        return '{{%debts}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['date', 'status_pay'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::class, 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'date' => 'Date',
            'status' => 'Status',
            'status_pay' => 'Status Pay',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

}



?>