<?php

namespace App\Repositories\Gift;

use App\DTOs\GiftFilterDTO;
use Illuminate\Support\Collection;

interface GiftRepositoryInterface
{
    public function getSuggestedGifts(GiftFilterDTO $giftFilterDTO): Collection;
}
