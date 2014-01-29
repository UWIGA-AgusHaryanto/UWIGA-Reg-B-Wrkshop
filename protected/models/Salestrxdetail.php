<?php

/**
 * This is the model class for table "salestrxdetail".
 *
 * The followings are the available columns in table 'salestrxdetail':
 * @property integer $id
 * @property integer $salestrxid
 * @property string $productid
 * @property double $qty
 * @property double $price
 * @property double $discount
 * @property double $subtotal
 * @property integer $PriceId
 */
class Salestrxdetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salestrxdetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salestrxid, PriceId', 'numerical', 'integerOnly'=>true),
			array('qty, price, discount, subtotal', 'numerical'),
			array('productid', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, salestrxid, productid, qty, price, discount, subtotal, PriceId', 'safe', 'on'=>'search'),
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
			'salestrxid' => 'Salestrxid',
			'productid' => 'Productid',
			'qty' => 'Qty',
			'price' => 'Price',
			'discount' => 'Discount',
			'subtotal' => 'Subtotal',
			'PriceId' => 'PriceId',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('salestrxid',$this->salestrxid);
		$criteria->compare('productid',$this->productid,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('price',$this->price);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('subtotal',$this->subtotal);
		$criteria->compare('PriceId',$this->PriceId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salestrxdetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
