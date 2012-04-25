<?php

/**
 * This is the model class for table "bilety".
 *
 * The followings are the available columns in table 'bilety':
 * @property integer $idBiletu
 * @property integer $idSeansu
 * @property string $rzad
 * @property integer $miejsce
 * @property string $rodzaj
 * @property double $cena
 * @property string $data
 * @property integer $idWidza
 * @property integer $idPracownika
 *
 * The followings are the available model relations:
 * @property Widzowie $idWidza0
 * @property Pracownicy $idPracownika0
 * @property Seans $idSeansu0
 */
class Bilet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bilet the static model class
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
		return 'bilety';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSeansu, rzad, miejsce, rodzaj, cena, data', 'required'),
			array('idSeansu, miejsce, idWidza, idPracownika', 'numerical', 'integerOnly'=>true),
			array('cena', 'numerical'),
			array('rzad', 'length', 'max'=>1),
			array('rodzaj', 'length', 'max'=>9),
			array('data', 'length', 'max'=>10),
			array('data', 'date','format'=>'yyyy-MM-dd', 'message'=>'Zawartoœæ pola Data musi byæ w formacie yyyy-mm-dd'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idBiletu, idSeansu, rzad, miejsce, rodzaj, cena, data, idWidza, idPracownika', 'safe', 'on'=>'search'),
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
			'idWidza0' => array(self::BELONGS_TO, 'Widzowie', 'idWidza'),
			'idPracownika0' => array(self::BELONGS_TO, 'Pracownicy', 'idPracownika'),
			'idSeansu0' => array(self::BELONGS_TO, 'Seans', 'idSeansu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBiletu' => 'Id Biletu',
			'idSeansu' => 'Seans',
			'rzad' => 'Rzad',
			'miejsce' => 'Miejsce',
			'rodzaj' => 'Rodzaj',
			'cena' => 'Cena',
			'data' => 'Data',
			'idWidza' => 'Widz',
			'idPracownika' => 'Pracownik',
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

		$criteria->compare('idBiletu',$this->idBiletu);
		$criteria->compare('idSeansu',$this->idSeansu);
		$criteria->compare('rzad',$this->rzad,true);
		$criteria->compare('miejsce',$this->miejsce);
		$criteria->compare('rodzaj',$this->rodzaj,true);
		$criteria->compare('cena',$this->cena);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('idWidza',$this->idWidza);
		$criteria->compare('idPracownika',$this->idPracownika);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}