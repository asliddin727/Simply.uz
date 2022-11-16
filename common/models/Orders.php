<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property int|null $port
 * @property string|null $url
 * @property int|null $centre_id
 * @property string|null $fullName
 * @property string|null $centre_name
 * @property string|null $date
 * @property string|null $create_date
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property Debts[] $debts
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * Gets query for [[Debts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDebts()
    {
        return $this->hasMany(Debts::class, ['order_id' => 'id']);
    }
}
