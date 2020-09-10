<?php

namespace App\DataSource;



class ApiWeather
{
	public function getWeather(String $city)
	{

		try {
			$key = "aaa1129fc07f4aacb6763552a1f84c0b";
			$url = "http://api.openweathermap.org/data/2.5/weather?q={$city},br&lang=pt_br&units=metric&appid={$key}";
			$body = file_get_contents($url);
			return json_decode($body);
		} catch (\Exception $e) {

			throw $e;
		}
	}
}
