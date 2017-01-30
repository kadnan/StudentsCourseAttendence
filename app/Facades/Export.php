<?php
/**
 * Created by PhpStorm.
 * User: AdnanAhmad
 * Date: 2017-01-28
 * Time: 4:53 PM
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class Export extends Facade {
	protected static function getFacadeAccessor() {
		return 'export';
	}
}