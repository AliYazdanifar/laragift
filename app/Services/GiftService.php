<?php

namespace App\Services;

use App\DTOs\GiftFilterDTO;
use App\Models\Gift;
use App\Repositories\Gift\GiftRepositoryInterface;
use App\Strategies\Scoring\GiftScoringStrategyInterface;
use Illuminate\Support\Collection;

class GiftService implements GiftServiceInterface
{
    public function __construct(
        protected GiftRepositoryInterface $repository,
        protected GiftScoringStrategyInterface $scoringStrategy
    )
    {
    }

    public function suggestGifts(GiftFilterDTO $filter): Collection
    {
        return $this->repository->all()
            ->map(function (Gift $gift) use ($filter) {
                $gift->score = $this->scoringStrategy->score($gift, $filter);
                return $gift;
            })
            ->sortByDesc('score')
            ->values();
    }

}
