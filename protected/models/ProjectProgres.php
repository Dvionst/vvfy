<?php

/**
 * This is the model class for table "project_progres".
 *
 * The followings are the available columns in table 'project_progres':
 * @property integer $id
 * @property integer $head_project_id
 * @property string $name_file
 */
class ProjectProgres extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjectProgres the static model class
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
		return 'project_progres';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('head_project_id, name_file', 'required'),
			array('head_project_id', 'numerical', 'integerOnly'=>true),
			array('name_file', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, head_project_id, name_file', 'safe', 'on'=>'search'),
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
			'head_project_id' => 'Head Project',
			'name_file' => 'Name File',
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
		$criteria->compare('head_project_id',$this->head_project_id);
		$criteria->compare('name_file',$this->name_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}