<?php

/**
 * This is the model class for table "seans".
 *
 * The followings are the available columns in table 'seans':
 * @property integer $idSeansu
 * @property integer $idSali
 * @property integer $idFilmu
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Bilety[] $bileties
 * @property Filmy $idFilmu0
 * @property Sale $idSali0
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
			array('idSali, idFilmu, data', 'required'),
			array('idSali, idFilmu', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idSeansu, idSali, idFilmu, data', 'safe', 'on'=>'search'),
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
			'bileties' => array(self::HAS_MANY, 'Bilety', 'idSeansu'),
			'idFilmu0' => array(self::BELONGS_TO, 'Filmy', 'idFilmu'),
			'idSali0' => array(self::BELONGS_TO, 'Sale', 'idSali'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSeansu' => 'Id Seansu',
			'idSali' => 'Id Sali',
			'idFilmu' => 'Id Filmu',
			'data' => 'Data',
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

		$criteria->compare('idSeansu',$this->idSeansu);
		$criteria->compare('idSali',$this->idSali);
		$criteria->compare('idFilmu',$this->idFilmu);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}