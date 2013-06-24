<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $ID
 * @property string $username
 * @property integer $password
 * @property integer $stars
 * @property string $fullname
 * @property string $location
 * @property string $type
 * @property string $create_time
 * @property string $update_time
 * @property integer $update_user_id
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'required'),
			array('password, stars, update_user_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>100),
			array('fullname, type', 'length', 'max'=>1),
			array('location', 'length', 'max'=>256),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, username, password, stars, fullname, location, type, create_time, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'stars' => 'Stars',
			'fullname' => 'Fullname',
			'location' => 'Location',
			'type' => 'Type',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password);
		$criteria->compare('stars',$this->stars);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}