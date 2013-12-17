<?php

namespace Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 **/
class Branch
{
	/**
	 * @ODM\Id
	 **/
	private $id;

	/**
	 * @ODM\String
	 **/
	private $name;
}
