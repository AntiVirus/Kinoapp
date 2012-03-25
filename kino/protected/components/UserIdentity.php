<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */	
	public function authenticate()
{
        $username = $this->username;
        $user = Pracownik::model()->find('login=?', array($username));
        if($user === NULL)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password, $this->username))
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
				$this->setState('names', htmlentities($user->imie)." ".htmlentities($user->nazwisko));
                $this->username = $user->login;
                $this->errorCode=self::ERROR_NONE;

        }
        return !$this->errorCode;
}
	
}