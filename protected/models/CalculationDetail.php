<?php

/**
 * This is the model class for table "calculation_detail".
 *
 * The followings are the available columns in table 'calculation_detail':
 * @property integer $id
 * @property integer $head_id
 * @property integer $area_type
 * @property double $area_size
 */
class CalculationDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CalculationDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'calculation_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_type, area_size', 'required'),
			array('head_id, area_type', 'numerical', 'integerOnly'=>true),
			array('area_size', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, head_id, area_type, area_size', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'head_id' => 'Head',
			'area_type' => 'Area Type',
			'area_size' => 'Area Size',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('head_id',$this->head_id);
		$criteria->compare('area_type',$this->area_type);
		$criteria->compare('area_size',$this->area_size);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}