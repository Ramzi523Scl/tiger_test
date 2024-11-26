<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\SmsProxyService;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
	private SmsProxyService $smsService;

	public function __construct(SmsProxyService $smsProxyService)
	{
		$this->smsService = $smsProxyService;
	}

	public function getNumber(Request $request)
	{
		$country  = $request->input('country');
		$service  = $request->input('service');
		$rentTime = $request->input('rent_time');

		$result = $this->smsService->getNumber($country, $service, $rentTime);

		return response()->json($result);

	}

	public function getSms(int $activation_id)
	{
		$result = $this->smsService->getSms($activation_id);

		return response()->json($result);
	}


	public function cancelNumber(int $activation_id)
	{
		$result = $this->smsService->cancelNumber($activation_id);

		return response()->json($result);
	}

	public function getStatus(int $activation_id)
	{
		$result = $this->smsService->getStatus($activation_id);

		return response()->json($result);
	}
}
