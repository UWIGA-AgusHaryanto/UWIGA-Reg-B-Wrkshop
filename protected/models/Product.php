<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $productid
 * @property string $name
 * @property string $UOM
 * @property integer $stock
 * @property double $price
 * @property double $value
 *
 * The followings are the available model relations:
 * @property Billingdetail[] $billingdetails
 * @property Price[] $prices
 * @property Salestrx[] $salestrxes
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock', 'numerical', 'integerOnly'=>true),
			array('price, value', 'numerical'),
			array('productid', 'length', 'max'=>10),
			array('name', 'length', 'max'=>40),
			array('UOM', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('productid, name, UOM, stock, price, value', 'safe', 'on'=>'search'),
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
			'billingdetails' => array(self::HAS_MANY, 'Billingdetail', 'productid'),
			'prices' => array(self::HAS_MANY, 'Price', 'ProductId'),
			'salestrxes' => array(self::MANY_MANY, 'Salestrx', 'salestrxdetail(productid, salestrxid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'productid' => 'Productid',
			'name' => 'Name',
			'UOM' => 'Uom',
			'stock' => 'Stock',
			'price' => 'Price',
			'value' => 'Value',
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

		$criteria->compare('productid',$this->productid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('UOM',$this->UOM,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('price',$this->price);
		$criteria->compare('value',$this->value);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
