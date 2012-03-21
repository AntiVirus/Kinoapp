<?php

/**
 * This is the model class for table "widzowie".
 *
 * The followings are the available columns in table 'widzowie':
 * @property integer $idWidza
 * @property string $imie
 * @property string $nazwisko
 * @property string $telefon
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Bilety[] $bileties
 */
class Widz extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Widz the static model class
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
		return 'widzowie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imie, nazwisko, telefon, email', 'required'),
			array('imie', 'length', 'max'=>30),
			array('nazwisko, telefon, email', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idWidza, imie, nazwisko, telefon, email', 'safe', 'on'=>'search'),
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
			'bileties' => array(self::HAS_MANY, 'Bilety', 'idWidza'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idWidza' => 'Id Widza',
			'imie' => 'Imie',
			'nazwisko' => 'Nazwisko',
			'telefon' => 'Telefon',
			'email' => 'Email',
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

		$criteria->compare('idWidza',$this->idWidza);
		$criteria->compare('imie',$this->imie,true);
		$criteria->compare('nazwisko',$this->nazwisko,true);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}