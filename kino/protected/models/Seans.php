<?php

/**
 * This is the model class for table "seans".
 *
 * The followings are the available columns in table 'seans':
 * @property integer $idSeansu
 * @property integer $idSali
 * @property integer $idFilmu
 * @property string $data
 * @property string $godzina
 *
 * The followings are the available model relations:
 * @property Bilety[] $bileties
 * @property Sale $idSali0
 * @property Filmy $idFilmu0
 */
class Seans extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Seans the static model class
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
		return 'seans';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSali, idFilmu, data, godzina', 'required'),
			array('idSali, idFilmu', 'numerical', 'integerOnly'=>true),
			array('data', 'date','format'=>'yyyy-MM-dd', 'message'=>'Zawartość pola Data musi być w formacie yyyy-mm-dd'),
			array('godzina', 'date','format'=>'hh:mm', 'message'=>'Zawartość pola Godzina musi być w formacie hh:mm'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idSeansu, idSali, idFilmu, data, godzina, datakoniec', 'safe', 'on'=>'search'),
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
			'bileties' => array(self::HAS_MANY, 'Bilet', 'idSeansu'),
			'idSali0' => array(self::BELONGS_TO, 'Sala', 'idSali'),
			'idFilmu0' => array(self::BELONGS_TO, 'Film', 'idFilmu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSeansu' => 'Id Seansu',
			'idSali' => 'Numer sali',
			'idFilmu' => 'Tytuł filmu',
			'data' => 'Data',
			'godzina' => 'Godzina',
			'tytulfilmu' => 'Tytuł filmu',
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
		//$now = new CDbExpression("NOW()");

		
		$criteria->compare('idSeansu',$this->idSeansu);
		$criteria->compare('idSali',$this->idSali);
		$criteria->compare('idFilmu',$this->idFilmu);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('godzina',$this->godzina,true);
	
		//$criteria->addCondition('datakoniec < '.$now);		
		//$criteria->compare('datakoniec','<'. date('yyyy-mm-dd 00:00:00', strtotime('now')), true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
