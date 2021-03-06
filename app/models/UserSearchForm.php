<?php

namespace app\models;

use \Yii;
use \yii\base\Model;

use app\components\UserIdentity;

/**
 * LoginForm is the model behind the login form.
 */
class UserSearchForm extends Model
{
	public $username;
	
	/**
	 * @return array the validation rules.
	 */
	public function rules()
	{
		return array(
			// username and password are both required
			array('username', 'string'),
		);
	}

}
