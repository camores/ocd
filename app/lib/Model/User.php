<?php

namespace Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="users")
 **/
class User 
{
	/**
	 * @ODM\Id
	 **/
	private $id;

	/**
	 * @ODM\String
	 **/
	private $email_address;

	/**
	 * @ODM\String
	 **/
	private $password;

	/**
	 * @ODM\ReferenceMany(targetDocument="Branch", cascade="all")
	 **/
	private $branches = array();

	public function __construct($email_address, $password) 
	{
		$this->email_address = $email_address;
		$this->password = $password;
	}
}

?>
