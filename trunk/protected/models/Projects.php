<?php

/**
 * This is the model class for table "projects".
 *
 * The followings are the available columns in table 'projects':
 * @property integer $projectId
 * @property string $projectName
 * @property string $status
 * @property integer $userId
 * @property string $Description
 * @property string $startday
 * @property integer $endday
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 * @property integer $bid
 * @property integer $ProjectBudget
 */
class Projects extends CodethueActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projects the static model class
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
		return 'projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectName', 'required'),
			array('userId, endday, bid, ProjectBudget', 'numerical', 'integerOnly'=>true),
			array('projectName', 'length', 'max'=>100),
			array('status', 'length', 'max'=>1),
			array('Description, startday, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('projectId, projectName, status, userId, Description, startday, endday, bid, ProjectBudget', 'safe', 'on'=>'search'),
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
			'projectId' => 'Project',
			'projectName' => 'Project Name',
			'status' => 'Status',
			'userId' => 'User',
			'Description' => 'Description',
			'startday' => 'Start day',
			'endday' => 'End day(hours)',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
			'bid' => 'Bid',
			'ProjectBudget' => 'Project Budget',
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

		$criteria->compare('projectId',$this->projectId);
		$criteria->compare('projectName',$this->projectName,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('startday',$this->startday,true);
		$criteria->compare('endday',$this->endday);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('bid',$this->bid);
		$criteria->compare('ProjectBudget',$this->ProjectBudget);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function getBidOfProject($projectId)
	{
		return Yii::app()->db->createCommand('SELECT count(cost) FROM bids Where projectId='.$projectId)->queryScalar();
	}
	public static function getAvgBidProject($projectId)
	{
		$count = Projects::getBidOfProject($projectId);
		if ($count == 0)
			return 0;
		return Yii::app()->db->createCommand('SELECT sum(cost) FROM bids Where projectId='.$projectId)->queryScalar()/$count;
	}
}