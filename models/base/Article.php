<?php

/**
 * This class is generated using the package rare/codegen
 */

namespace rare\exchange1c\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the base-model class for table "article".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property integer $pos
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Article extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%article}}';
	}


	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
		            [['name'], 'required'],
		            [['parent_id', 'pos'], 'integer'],
		            [['content'], 'string'],
		            [['name'], 'string', 'max' => 255],
		        ];
	}


	/**
	 * @inheritdoc
	 * @return \rare\exchange1c\models\Article|\yii\db\ActiveRecord
	 */
	public static function findOne($condition, $raise = false)
	{
		$model = parent::findOne($condition);
		if (!$model && $raise){
		    throw new \yii\web\HttpException(404, Yii::t('errors', "Model rare\\exchange1c\\models\\Article not found"));
		}else{
		    return $model;
		}
	}


	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
		    'id' => Yii::t('models', 'ID'),
		    'name' => Yii::t('models', 'Name'),
		    'parent_id' => Yii::t('models', 'Parent ID'),
		    'pos' => Yii::t('models', 'Pos'),
		    'content' => Yii::t('models', 'Content'),
		    'created_at' => Yii::t('models', 'Created At'),
		    'updated_at' => Yii::t('models', 'Updated At')
		];
	}


	/**
	 * @inheritdoc
	 * @return \rare\exchange1c\models\query\ArticleQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \rare\exchange1c\models\query\ArticleQuery(get_called_class());
	}


	/**
	 * @param string $attribute
	 * @return string|null
	 */
	public function getRelationClass($attribute)
	{
		return ArrayHelper::getValue($this->_relationClasses, $attribute);
	}
}
