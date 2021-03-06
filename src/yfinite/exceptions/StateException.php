<?php

namespace yfinite\exceptions;

use yii\base\Exception;

/**
 * Class StateException
 * @package yfinite
 * @author: Aleksei Vesnin <dizeee@dizeee.ru>
 */
class StateException extends Exception
{
	/**
	 * @inheritdoc
	 */
	public function getName()
	{
		return 'yFinite State Exception';
	}
}
