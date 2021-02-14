<?php namespace Folklore\Image\Facades;

use Illuminate\Support\Facades\Facade;

class Image extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'folkloreimage';
	}

}