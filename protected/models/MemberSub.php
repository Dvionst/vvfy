<?php

/**
 * This is the model class for table "member_sub".
 *
 * The followings are the available columns in table 'member_sub':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $id_member
 * @property string $date_invite
 */
class MemberSub extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MemberSub the static model class
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
		return 'member_sub';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, id_member, date_invite', 'required'),
			array('id_member', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>50),
			array('email','unique'),
			array('email','validateEmail'),
			array('name','required','on'=>'confirmation'),
			// array('email','pattern'=>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, id_member, date_invite', 'safe', 'on'=>'search'),
		);
	}

	public function validateEmail($attribute){
		$pattern  = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
		if(!preg_match($pattern, $this->email))
		  $this->addError($attribute, 'email is invalid!');
    	
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
			'name' => 'Name',
			'email' => 'Email',
			'id_member' => 'Id Member',
			'date_invite' => 'Date Invite',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_member',$this->id_member);
		$criteria->compare('date_invite',$this->date_invite,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}