<?php

/**
 * This is the model class for table "account_contact".
 */
class AccountContact extends Model
{
	/**
	 * The followings are the available columns in table 'account_contact':
	 * @var string $account_id
	 * @var string $company_employee_id
	 * @var integer $primary
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return AccountContact the static model class
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
		return 'account_contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_id, company_employee_id', 'required'),
			array('primary', 'numerical', 'integerOnly'=>true),
			array('account_id, company_employee_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('account_id, company_employee_id, primary', 'safe', 'on'=>'search'),
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
			'account_id' => 'Account',
			'company_employee_id' => 'Company Employee',
			'primary' => 'Primary',
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

		$criteria->compare('account_id',$this->account_id,true);

		$criteria->compare('company_employee_id',$this->company_employee_id,true);

		$criteria->compare('primary',$this->primary);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}