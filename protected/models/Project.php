<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
 * @property integer $id_member
 * @property string $project_name
 * @property string $start_date
 * @property string $due_date
 * @property string $username
 * @property integer $task
 * @property double $progres
 * @property integer $priority
 * @property integer $status
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_member, project_name, start_date, due_date, task, progres, priority, status', 'required','on'=>'create'),
			array('id_member, project_name, start_date, due_date','required','on'=>'user_create' ),
			array('id_member, task, priority, status', 'numerical', 'integerOnly'=>true),
			array('progres', 'numerical'),
			array('project_name', 'uniqueProject'),
			array('project_name', 'length', 'max'=>50),
			array('username', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_member, project_name, start_date, due_date, username, task, progres, priority, status', 'safe', 'on'=>'search'),
		);
	}
	public function uniqueProject($attribute){
		// $pattern  = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
		// if(!preg_match($pattern, $this->email))
		// $id = Yii::app()->user->id;
		// if (Yii::app()->user->level()=='3'){		
		// 	$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
		// }else{
		// 	$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;
		// }	
		$model = Project::model()->find(" project_name = '$this->project_name' and id_member = '$this->id_member'  ");
		if (count($model)>0)
			$this->addError($attribute, "Project for this client , already exist !");
    	
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
			'id_member' => 'Id Member',
			'project_name' => 'Project Name',
			'start_date' => 'Start Date',
			'due_date' => 'Due Date',
			'username' => 'Username',
			'task' => 'Task',
			'progres' => 'Progres',
			'priority' => 'Priority',
			'status' => 'Status',
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
		$criteria->compare('id_member',$this->id_member);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('task',$this->task);
		$criteria->compare('progres',$this->progres);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}