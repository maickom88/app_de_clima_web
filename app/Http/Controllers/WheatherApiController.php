<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Cache;
use App\Repositories\ApiRepositoryInterface;
use Exception;

class WheatherApiController extends Controller
{
	public function getWeather(ApiRepositoryInterface $repository, Request $req)
	{






		try {
			if (!Cache::has($req->city)) {
				$data = $repository->getWeather($req->city);
				Cache::put("{$req->city}", $data, 15);
			}
			$data = Cache::get($req->city);
			return json_encode($data, JSON_UNESCAPED_UNICODE);
		} catch (\Exception $e) {
			return json_encode([
				"cod" => 404
			]);
		}
	}
}
