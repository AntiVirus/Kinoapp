<?php

/**
 * This is the model class for table "filmy".
 *
 * The followings are the available columns in table 'filmy':
 * @property integer $idFilmu
 * @property string $tytul
 * @property string $gatunek
 * @property integer $rok
 * @property string $opis
 * @property string $rezyser
 * @property string $imageUrl
 *
 * The followings are the available model relations:
 * @property Seans[] $seans
 */
class Film extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Film the static model class
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
		return 'filmy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tytul, gatunek, rok, opis, rezyser', 'required'),
			array('rok', 'numerical', 'integerOnly'=>true),
			array('tytul', 'length', 'max'=>60),
			array('gatunek', 'length', 'max'=>30),
			array('rezyser', 'length', 'max'=>50),
			array('imageUrl', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFilmu, tytul, gatunek, rok, opis, rezyser, imageUrl', 'safe', 'on'=>'search'),
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
			'seans' => array(self::HAS_MANY, 'Seans', 'idFilmu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFilmu' => 'Id Filmu',
			'tytul' => 'Tytul',
			'gatunek' => 'Gatunek',
			'rok' => 'Rok',
			'opis' => 'Opis',
			'rezyser' => 'Rezyser',
			'imageUrl' => 'Adres obrazka',
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

		$criteria->compare('idFilmu',$this->idFilmu);
		$criteria->compare('tytul',$this->tytul,true);
		$criteria->compare('gatunek',$this->gatunek,true);
		$criteria->compare('rok',$this->rok);
		$criteria->compare('opis',$this->opis,true);
		$criteria->compare('rezyser',$this->rezyser,true);
		$criteria->compare('imageUrl',$this->imageUrl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}