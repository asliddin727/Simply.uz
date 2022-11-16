<?php

namespace backend\models;

use common\models\Orders as ModelsOrders;

class Orders extends ModelsOrders{

    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['port', 'centre_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['url'], 'string'],
            [['create_date'], 'safe'],
            [['fullName', 'centre_name', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'port' => 'Port',
            'url' => 'Url',
            'centre_id' => 'Centre ID',
            'fullName' => 'Full Name',
            'centre_name' => 'Centre Name',
            'date' => 'Date',
            'create_date' => 'Create Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

}



?>