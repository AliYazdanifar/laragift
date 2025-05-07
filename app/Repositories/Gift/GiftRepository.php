<?php

namespace App\Repositories\Gift;

use App\DTOs\GiftFilterDTO;
use App\Models\Gift;
use Illuminate\Support\Collection;

class GiftRepository implements GiftRepositoryInterface
{

    public function getSuggestedGifts(GiftFilterDTO $giftFilterDTO): Collection
    {

        return Gift::query()
            ->where('min_age', '<=', $giftFilterDTO->age)
            ->where('max_age', '>=', $giftFilterDTO->age)
            ->where('price', '<=', $giftFilterDTO->budget)
            ->whereHas('occasions', fn($q) => $q->whereIn('id', $giftFilterDTO->occasions))
            ->whereHas('interests', fn($q) => $q->whereIn('id', $giftFilterDTO->interests))
            ->get();
    }

}
