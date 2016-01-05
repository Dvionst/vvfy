<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $username
 * @property string $password
 * @property integer $level
 * @property string $description
 * @property integer $confirm_email
 * @property integer $old_password
 */
class User extends CActiveRecord
{
	public $old_password;
	public $new_password;
	public $new_password_repeat;
	public $repeat_password;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, level, description, confirm_email', 'required','on'=>'insert'),
			array('username, password, level', 'required','on'=>'register'),
			array('level, confirm_email', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>30),
			array('description', 'length', 'max'=>100),
			array('username','unique'),
			
			array('old_password', 'compare', 'compareAttribute'=>'password','operator'=>'==','message'=>'old password is not correct','on'=>'update'),

			array('repeat_password', 'compare', 'compareAttribute'=>'password','operator'=>'==','message'=>'password not same','on'=>'employee'),
			array('password,username,repeat_password','required','on'=>'employee'),


			array('new_password', 'compare','operator'=>'=','message'=>'new password and confirm password must be same'),
			array('new_password,old_password,new_password_repeat', 'required','on'=>'update'),
			
			array('last_login', 'required','on'=>'login'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			// array('username, password, level, description, confirm_email', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'level' => 'Level',
			'description' => 'Description',
			'confirm_email' => 'Confirm Email',
			'old_password' => 'Old Password',
			'new_password' => 'new Password ',
			'new_password_repeat' => 'Confirm password',
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

		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('confirm_email',$this->confirm_email);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}