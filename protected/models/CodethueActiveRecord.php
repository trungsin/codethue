<?php
abstract class CodethueActiveRecord extends CActiveRecord
{
  /**
  * Prepares create_time, create_user_id, update_time and update_user_id attributes before performing validation.
  */
  protected function beforeValidate()
  {
      if($this->isNewRecord)
      {
		// set the create date, last updated date and the user doing the creating  
		if(isset($_POST['Projects']))
		{
			$this->create_time = new CDbExpression('NOW()');
			$this->create_user_id = Yii::app()->user->id;
			$this->userId = Yii::app()->user->id;
			
		}
		else
		{
			$this->create_time=$this->update_time=new CDbExpression('NOW()');
			$this->create_user_id=$this->update_user_id=Yii::app()->user->id;
		}
      }
	  else
      {
		if(!isset($_POST['Contacts']))
		{
		  //not a new record, so just set the last updated time and last updated user id     
			$this->update_time=new CDbExpression('NOW()');
			$this->update_user_id=Yii::app()->user->id;
        }
      }
    
		return parent::beforeValidate();
    }
	public static function getLanguageOption()
	{
		return array(
				'vn'=>'Tiếng Việt',
				'en'=>'English',
				);
	}
    public function getStatuOption()
    {
        return array(
                '0'=>'Chưa hiển thị',
                '1'=>'Hiển thị',
                );
    }
	public function getCatelogOption($isNews)
	{
		$marray = null;
		if($isNews)
		{
			$criteria = new CDbCriteria();
			$criteria->condition ='parent_id!=:parentId';
			$criteria->params=array(':parentId'=>0);
			$marray = Category::model()->findAll($criteria);
		}
		else
		{
			$marray = Products::model()->findAll();
		}
		
		return CHtml::listData($marray, 'id', 'title');
	}

}