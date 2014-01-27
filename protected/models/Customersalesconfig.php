<?php

/**
 * This is the model class for table "customersalesconfig".
 *
 * The followings are the available columns in table 'customersalesconfig':
 * @property string $custid
 * @property double $CreditLimit
 * @property integer $TOP
 * @property integer $DistrChannel
 * @property string $Entryby
 * @property string $entryDate
 * @property string $lastUpdated
 */
class Customersalesconfig extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customersalesconfig';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TOP, DistrChannel', 'numerical', 'integerOnly'=>true),
			array('CreditLimit', 'numerical'),
			array('custid', 'length', 'max'=>10),
			array('Entryby', 'length', 'max'=>15),
			array('entryDate, lastUpdated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('custid, CreditLimit, TOP, DistrChannel, Entryby, entryDate, lastUpdated', 'safe', 'on'=>'search'),
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
			'custid' => 'Custid',
			'CreditLimit' => 'Credit Limit',
			'TOP' => 'Top',
			'DistrChannel' => 'Distr Channel',
			'Entryby' => 'Entryby',
			'entryDate' => 'Entry Date',
			'lastUpdated' => 'Last Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('custid',$this->custid,true);
		$criteria->compare('CreditLimit',$this->CreditLimit);
		$criteria->compare('TOP',$this->TOP);
		$criteria->compare('DistrChannel',$this->DistrChannel);
		$criteria->compare('Entryby',$this->Entryby,true);
		$criteria->compare('entryDate',$this->entryDate,true);
		$criteria->compare('lastUpdated',$this->lastUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customersalesconfig the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
