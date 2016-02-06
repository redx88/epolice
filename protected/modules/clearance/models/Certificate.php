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
 * @property integer $residentcertdateissued
 * @property string $amount
 * @property integer $datefiled
 * @property integer $daterelease
 */
class Certificate extends CActiveRecord
{

	public $user_searchl,$user_searchf,$user_searchm;

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
			array('purpose, or_number, investigator_id, officer_id, findings, residentcertnumber, residentcertdateissued, amount', 'required'),
			//array('station_id, applicant_id, investigator_id, officer_id, residentcertdateissued, datefiled, daterelease', 'numerical', 'integerOnly'=>true),
			array('certificate_no, purpose, or_number, findings, residentcertnumber', 'length', 'max'=>200),
			array('amount', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,user_searchl,user_searchf,user_searchm, station_id, applicant_id, certificate_no, purpose, or_number, investigator_id, officer_id, findings, residentcertnumber, residentcertdateissued, amount, datefiled, daterelease', 'safe', 'on'=>'search'),
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
			'applicant'=>array(self::BELONGS_TO,'Applicant','applicant_id')
			//'profile'=>array(self::BELONGS_TO,'Profile','user_id'),
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
			'residentcertdateissued' => 'Residentcertdateissued',
			'amount' => 'Amount',
			'datefiled' => 'Datefiled',
			'daterelease' => 'Daterelease',
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

		$criteria->with = array( 'applicant' );
		$criteria->compare( 'applicant.lastname', $this->user_searchl, true );
		$criteria->compare( 'applicant.firstname', $this->user_searchf, true );
		$criteria->compare( 'applicant.middlename', $this->user_searchm, true );
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
		$criteria->compare('residentcertdateissued',$this->residentcertdateissued);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('datefiled',$this->datefiled);
		$criteria->compare('daterelease',$this->daterelease);

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


	public function beforeSave() {
    if ($this->isNewRecord)
        $this->datefiled = new CDbExpression('NOW()');
    return parent::beforeSave();
	}
}
