<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $id
 * @property string $name
 * @property integer $id_mc
 * @property string $email
 * @property string $date_register
 */
class Member extends CActiveRecord
{
	public $email_invite;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
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
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, name', 'unique', 'on'=>'register'),
			array('name, type_account', 'required', 'on'=>'register'),
			// array('name, email, date_register,phone,address', 'required'),
			array('id_mc', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>50),

			array('name, company_name, phone, address','safe', 'on'=>'change_info'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searcmodelhed.
			array('id, name, id_mc, email, date_register', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'id_mc' => 'Id Mc',
			'email' => 'Email',
			'date_register' => 'Date Register',
			'phone' => 'phone',
			'address' => 'address',
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
		$criteria->compare('id_mc',$this->id_mc);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('date_register',$this->date_register,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}