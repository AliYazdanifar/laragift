<?php

namespace App\Http\Controllers;

use App\DTOs\GiftFilterDTO;
use App\Services\GiftService;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function __construct(public GiftService $giftService)
    {
    }

    public function index()
    {
        return view('gift.index');
    }

    public function suggest(Request $request)
    {
        $dto = new GiftFilterDTO(
            age: $request->input('age'),
            gender: $request->input('gender'),
            interests: $request->input('interests', []),
            occasions: $request->input('occasions', []),
            budget: $request->input('budget'),
        );

        return $this->giftService->suggestGifts($dto);
    }

}
