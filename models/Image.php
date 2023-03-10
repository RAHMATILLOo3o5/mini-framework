<?php

namespace app\models;

use app\core\Model;

class Image extends Model
{
	public $query;

	/**
	 * @return mixed
	 */
	public function rules ()
	{
		return [
			'query' => [ self::RULE_REQUIRED ],
		];
	}
}