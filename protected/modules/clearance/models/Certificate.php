<?php

/**
 * This is the model class for table "certificate".
 *
 * The followings are the available columns in table 'certificate':
 * @property integer $id
 * @property integer $station_id
 * @property integer $applicant_id
 * @property string $certificate_no
 * @property string $purpose
 * @property string $or_number
 * @property integer $investigator_id
 * @property integer $officer_id
 * @property string $findings
 * @property string $residentcertnumber
 * @property string $amount
 * @property integer $datefiled
 */
class Certificate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'certificate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('station_id, applicant_id, certificate_no, purpose, or_number, investigator_id, officer_id, findings, residentcertnumber, amount, datefiled', 'required'),
			array('station_id, applicant_id, investigator_id, officer_id, datefiled', 'numerical', 'integerOnly'=>true),
			array('certificate_no, purpose, or_number, findings, residentcertnumber', 'length', 'max'=>200),
			array('amount', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, station_id, applicant_id, certificate_no, purpose, or_number, investigator_id, officer_id, findings, residentcertnumber, amount, datefiled', 'safe', 'on'=>'search'),
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
			'station_id' => 'Station',
			'applicant_id' => 'Applicant',
			'certificate_no' => 'Certificate No',
			'purpose' => 'Purpose',
			'or_number' => 'Or Number',
			'investigator_id' => 'Investigator',
			'officer_id' => 'Officer',
			'findings' => 'Findings',
			'residentcertnumber' => 'Residentcertnumber',
			'amount' => 'Amount',
			'datefiled' => 'Datefiled',
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
		$criteria->compare('station_id',$this->station_id);
		$criteria->compare('applicant_id',$this->applicant_id);
		$criteria->compare('certificate_no',$this->certificate_no,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('or_number',$this->or_number,true);
		$criteria->compare('investigator_id',$this->investigator_id);
		$criteria->compare('officer_id',$this->officer_id);
		$criteria->compare('findings',$this->findings,true);
		$criteria->compare('residentcertnumber',$this->residentcertnumber,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('datefiled',$this->datefiled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Certificate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
