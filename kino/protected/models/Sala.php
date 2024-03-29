<?php

/**
 * This is the model class for table "sale".
 *
 * The followings are the available columns in table 'sale':
 * @property integer $idSali
 * @property integer $rzedy
 * @property integer $miejsca
 *
 * The followings are the available model relations:
 * @property Seans[] $seans
 */
class Sala extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sala the static model class
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
		return 'sale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSali, rzedy, miejsca', 'required'),
			array('idSali, rzedy, miejsca', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idSali, rzedy, miejsca', 'safe', 'on'=>'search'),
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
			'seans' => array(self::HAS_MANY, 'Seans', 'idSali'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSali' => 'Numer sali',
			'rzedy' => 'Rzedy',
			'miejsca' => 'Miejsca',
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

		$criteria->compare('idSali',$this->idSali);
		$criteria->compare('rzedy',$this->rzedy);
		$criteria->compare('miejsca',$this->miejsca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}