<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * redbean driver for kohana auth. for details see {@see Kohana_Auth}.
 */
class Precept_Auth_Redbean extends Auth {
	public $table = 'users';
	public $field_user = 'username';
	public $field_pass = 'password';

	protected function _login($username, $password, $remember)
	{
		// TODO add functionality for $remember flag
		$user = R::findOne(
			$this->table,
			$this->field_user.'=:username AND '.$this->field_pass.'=:password',
			array('username' => $username, 'password' => $this->hash($password))
		);
		if (!empty($user))
		{
			return $this->complete_login($user);
		}
		return FALSE;
	}

	public function password($username)
	{
		$user = R::findOne(
			$this->table,
			$this->field_user.'=:username',
			array('username' => $username)
		);
		if (!empty($user))
		{
			return $user->password;
		}
		return NULL;
	}

	public function check_password($password)
	{
		$user = $this->get_user();
		if ($user)
		{
			return ($this->hash($password) == $user->password);
		}
		return FALSE;
	}

	public function logged_in($role = NULL)
	{
		return parent::logged_in($role);
	}

	public function get_user($default = NULL)
	{
		return parent::get_user($default);
	}
}
