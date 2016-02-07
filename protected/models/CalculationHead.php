<?php

/**
 * This is the model class for table "calculation_head".
 *
 * The followings are the available columns in table 'calculation_head':
 * @property integer $id
 * @property string $datetime
 * @property string $email
 * @property string $phone
 * @property integer $project_type
 * @property integer $views_count
 * @property integer $interior_areas
 * @property integer $project_style
 * @property integer $product_type
 * @property integer $number_views
 * @property string $deadline
 * @property integer $reference
 */
class CalculationHead extends CActiveRecord
{
	public $date;
	public $month;
	public $year;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CalculationHead the static model class
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
		return 'calculation_head';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, project_type, reference, date, month, year', 'required'),
			array('email','email','message'=>'Please provide an email address'), 
			array('views_count, project_style','required','on'=>'1'),
			array('interior_areas, project_style','required','on'=>'2'),
			array('views_count, interior_areas, project_style','required','on'=>'3'),
			array('product_type, number_views','required','on'=>'4'),
			array('project_type, views_count, interior_areas, project_style, product_type, number_views, reference', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>150),
			array('phone', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, datetime, email, phone, project_type, views_count, interior_areas, project_style, product_type, number_views, deadline, reference', 'safe', 'on'=>'search'),
		);
	}

	//Opt1 = architecture
	//Opt2 = interior
	//Opt3 = arch & interior
	//Opt4 = product

	public function isOpt1($attributes,$params)
	{
	  if(!$this->project_type=1){
	  	$this->addError($attributes,'Please fill this field');
	  }  
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
			'datetime' => 'Datetime',
			'email' => 'Email',
			'phone' => 'Phone',
			'project_type' => 'Project Type',
			'views_count' => 'Views Count',
			'interior_areas' => 'Interior Areas',
			'project_style' => 'Project Style',
			'product_type' => 'Product Type',
			'number_views' => 'Number Views',
			'deadline' => 'Deadline',
			'reference' => 'Reference',
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
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('project_type',$this->project_type);
		$criteria->compare('views_count',$this->views_count);
		$criteria->compare('interior_areas',$this->interior_areas);
		$criteria->compare('project_style',$this->project_style);
		$criteria->compare('product_type',$this->product_type);
		$criteria->compare('number_views',$this->number_views);
		$criteria->compare('deadline',$this->deadline,true);
		$criteria->compare('reference',$this->reference);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}