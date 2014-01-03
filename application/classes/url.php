<?php

class URL extends Kohana_URL
{
	public static function serve($url)
	{
		return URL::site('static/'.$url);
	}
}



