<?php

namespace App\Repositories;

use App\DataSource\ApiLocal;
use App\DataSource\ApiWeather;


class ApiRepository implements ApiRepositoryInterface

{
	protected $apiWeather;
	protected $apiLocal;
	public function __construct(ApiWeather $apiWeather, ApiLocal $apiLocal)
	{
		$this->apiWeather = $apiWeather;
		$this->apiLocal = $apiLocal;
	}


	public function getWeather(String $city)
	{
		$body = $this->apiWeather->getWeather($city);
		return $body;
	}

	public function defaultWeather()
	{
		$body = $this->apiLocal->getLocal();
		return $body->results->city;
	}
}
