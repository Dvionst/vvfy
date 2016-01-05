<?php

/**
 * This is the model class for table "project_views".
 *
 * The followings are the available columns in table 'project_views':
 * @property integer $id
 * @property string $project_id
 * @property string $view_name
 * @property string $created_date
 */
class ProjectViews extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjectViews the static model class
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
		return 'project_views';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('view_name', 'required','on'=>'insert'),
			array('view_name', 'length', 'max'=>50),
			array('view_name', 'length', 'min'=>3),
			array('created_date', 'safe'),
			array('view_name', 'uniqueViews'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, view_name, created_date', 'safe', 'on'=>'search'),
		);
	}
	public function uniqueViews($attribute){
		$model = ProjectViews::model()->find(" view_name = '$this->view_name' and project_id = '$this->project_id'  ");
		if (count($model)>0)
			$this->addError($attribute, "View for this client , already exist !");
    	
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
			'project_id' => 'Project',
			'view_name' => 'View Name',
			'created_date' => 'Created Date',
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
		$criteria->compare('project_id',$this->project_id,true);
		$criteria->compare('view_name',$this->view_name,true);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}