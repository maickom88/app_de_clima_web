<?php

namespace App\Http\Controllers;

use Exception;
use ErrorException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Repositories\ApiRepositoryInterface;


class WeatherController extends Controller
{



	public function getWeather(ApiRepositoryInterface $repository, Request $req)
	{


		if (!Cache::has("{$req->city}")) {
			$data = $repository->getWeather($req->city);
			$cache = Cache::put("{$req->city}", $data, 15);
		}


		$data = Cache::get("{$req->city}");


		try {
			if ($data->cod == "200") {
				return view('clima')->with('data', $data);
			} else {
				return view('clima')->with('error', true);
			}
		} catch (\Exception $e) {
			return view('clima')->with('error', true);
		}
	}

	public function defaultWeather(ApiRepositoryInterface $repository)
	{

		if (!Cache::has("city")) {
			$city = $repository->defaultWeather();
			$data = $repository->getWeather($city);
			Cache::put('city', $data, 15);
		}

		$data = Cache::get("city");

		try {
			if ($data->cod == "200") {
				return view('clima')->with('data', $data);
			} else {
				return view('clima')->with('error', true);
			}
		} catch (\Exception $e) {
			return view('clima')->with('error', true);
		}
	}
}
