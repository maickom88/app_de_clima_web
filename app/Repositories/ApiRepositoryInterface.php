<?php

namespace App\Repositories;

interface ApiRepositoryInterface
{
	public function getWeather(String $city);

	public function defaultWeather();
}
