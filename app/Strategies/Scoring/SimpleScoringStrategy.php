<?php

namespace App\Strategies\Scoring;

use App\DTOs\GiftFilterDTO;
use App\Models\Gift;

class SimpleScoringStrategy implements GiftScoringStrategyInterface
{
    public function score(Gift $gift, GiftFilterDTO $filter): int
    {
        $score = 0;

        if ($gift->min_age <= $filter->age && $gift->max_age >= $filter->age) {
            $score += 20;
        }

        if ($gift->price <= $filter->budget) {
            $score += 20;
        }

        $matchedInterests = $gift->interests->pluck('id')->intersect($filter->interests);
        $score += $matchedInterests->count() * 10;

        $matchedOccasions = $gift->occasions->pluck('id')->intersect($filter->occasions);
        $score += $matchedOccasions->count() * 10;

        return $score;
    }
}
