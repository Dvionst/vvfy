<?php

/**
 * This is the model class for table "notification".
 *
 * The followings are the available columns in table 'notification':
 * @property integer $id
 * @property string $tanggal
 * @property string $judul
 * @property string $keterangan
 * @property string $url
 * @property integer $is_baca
 */
class Notification extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Notification the static model class
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
		return 'notification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, tanggal, judul, keterangan', 'required'),
			array('id, is_baca', 'numerical', 'integerOnly'=>true),
			array('judul, url', 'length', 'max'=>100),
			array('keterangan', 'length', 'max'=>255),
			array('url','safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tanggal, judul, keterangan, url, is_baca', 'safe', 'on'=>'search'),
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
			'tanggal' => 'Tanggal',
			'judul' => 'Judul',
			'keterangan' => 'Keterangan',
			'url' => 'Url',
			'is_baca' => 'Is Baca',
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
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('is_baca',$this->is_baca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}