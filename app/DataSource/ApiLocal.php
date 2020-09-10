<?php

namespace App\DataSource;




class ApiLocal
{
	public function getLocal()
	{
		$KEY = "1996bcf7";
		$URL = "https://api.hgbrasil.com/geoip?key={$KEY}&address=remote&precision=false";

		$body = file_get_contents($URL);
		return json_decode($body);
	}
}
