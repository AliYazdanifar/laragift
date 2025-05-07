<?php

namespace App\Services;

use App\DTOs\GiftFilterDTO;
use Illuminate\Support\Collection;

interface GiftServiceInterface
{
    public function suggestGifts(GiftFilterDTO $filter): Collection;
}
