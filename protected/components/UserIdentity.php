<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$users = User::model()->find("LOWER(email)=?", array(strtolower($this->username)));
		if ($users === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		elseif (sha1($this->password) !== $users->password)
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id = $users->id;
			$this->setState("email", $users->email);
			$this->setState("nombre", $users->nombres);
			$this->setState("apellido", $users->apellidos);
			$this->setState("apellido", $users->id);
			$this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	public function getId()
	{
		return $this->_id;
	}
}
