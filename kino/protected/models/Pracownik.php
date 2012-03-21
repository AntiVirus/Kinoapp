<?php

/**
 * This is the model class for table "pracownicy".
 *
 * The followings are the available columns in table 'pracownicy':
 * @property integer $idPracownika
 * @property string $imie
 * @property string $nazwisko
 * @property string $stanowisko
 * @property string $login
 * @property string $haslo
 *
 * The followings are the available model relations:
 * @property Bilety[] $bileties
 */
class Pracownik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pracownik the static model class
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
		return 'pracownicy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imie, nazwisko, stanowisko, login, haslo', 'required'),
			array('imie, login, haslo', 'length', 'max'=>30),
			array('nazwisko', 'length', 'max'=>40),
			array('stanowisko', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPracownika, imie, nazwisko, stanowisko, login, haslo', 'safe', 'on'=>'search'),
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
			'bileties' => array(self::HAS_MANY, 'Bilety', 'idPracownika'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPracownika' => 'Id Pracownika',
			'imie' => 'Imie',
			'nazwisko' => 'Nazwisko',
			'stanowisko' => 'Stanowisko',
			'login' => 'Login',
			'haslo' => 'Haslo',
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

		$criteria->compare('idPracownika',$this->idPracownika);
		$criteria->compare('imie',$this->imie,true);
		$criteria->compare('nazwisko',$this->nazwisko,true);
		$criteria->compare('stanowisko',$this->stanowisko,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('haslo',$this->haslo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}