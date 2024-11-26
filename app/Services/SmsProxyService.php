<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsProxyService
{
	private string $apiUrl = 'https://postback-sms.com/api/';
	private string $token  = '5994c91001f57eea808aff11738d752a';

	public function getNumber(string $country, string $service, int $rentTime)
	{
		$params = [
			'country'   => $country,
			'service'   => $service,
			'rent_time' => $rentTime
		];

		return $this->makeRequest('getNumber', $params);
	}

	public function getSms(int $activationId)
	{
		return $this->makeRequest('getSms', ['activation' => $activationId]);
	}

	public function cancelNumber(int $activationId)
	{
		return $this->makeRequest('cancelNumber', ['activation' => $activationId]);
	}

	public function getStatus(int $activationId)
	{
		return $this->makeRequest('getStatus', ['activation' => $activationId]);
	}

	private function makeRequest(string $action, array $params)
	{
		$params = array_merge(['action' => $action, 'token' => $this->token], $params);

		$response = Http::get($this->apiUrl, $params);

		return $response->json();
	}
}