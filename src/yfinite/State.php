<?php

namespace yfinite;

use yii\base\Object;

/**
 * Class State
 * @package yfinite
 * @author: Aleksei Vesnin <dizeee@dizeee.ru>
 */
class State extends Object
{
	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var array
	 */
	public $properties = [];

	/**
	 * State constructor.
	 * @param string $name
	 * @param array $config
	 */
	public function __construct($name, $config = [])
	{
		$this->name = $name;
		parent::__construct($config);
	}

	/**
	 * Returns a state property.
	 * @param string $name
	 * @return mixed
	 */
	public function getProperty($name)
	{
		return isset($this->properties[$name]) ? $this->properties[$name] : null;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->name;
	}
}
