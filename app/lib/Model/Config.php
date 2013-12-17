<?php

namespace Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 **/
class Config
{
	/**
	 * @ODM\Id
	 **/
	private $id;

	/**
	 * @ODM\String
	 **/
	private $key;

	/**
	 * @ODM\String
	 **/
	private $value;
}

?>
