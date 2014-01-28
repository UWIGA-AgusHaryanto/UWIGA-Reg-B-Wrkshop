<?php

/**
 * This is the model class for table "salestrx".
 *
 * The followings are the available columns in table 'salestrx':
 * @property integer $salestrxId
 * @property string $trxdate
 * @property double $total
 * @property string $pay_type
 * @property integer $pay_status
 * @property string $Custid
 *
 * The followings are the available model relations:
 * @property Billing[] $billings
 * @property Customer $cust
 * @property Product[] $products
 */
class Salestrx extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salestrx';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pay_status', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('pay_type', 'length', 'max'=>3),
			array('Custid', 'length', 'max'=>10),
			array('trxdate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('salestrxId, trxdate, total, pay_type, pay_status, Custid', 'safe', 'on'=>'search'),
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
			'billings' => array(self::HAS_MANY, 'Billing', 'salestrxid'),
			'cust' => array(self::BELONGS_TO, 'Customer', 'Custid'),
			'products' => array(self::MANY_MANY, 'Product', 'salestrxdetail(salestrxid, productid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'salestrxId' => 'Salestrx',
			'trxdate' => 'Trxdate',
			'total' => 'Total',
			'pay_type' => 'Pay Type',
			'pay_status' => 'Pay Status',
			'Custid' => 'Custid',
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

		$criteria->compare('salestrxId',$this->salestrxId);
		$criteria->compare('trxdate',$this->trxdate,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('pay_type',$this->pay_type,true);
		$criteria->compare('pay_status',$this->pay_status);
		$criteria->compare('Custid',$this->Custid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salestrx the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
