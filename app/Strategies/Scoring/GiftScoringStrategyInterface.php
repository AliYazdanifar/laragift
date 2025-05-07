<?php

namespace App\Strategies\Scoring;

use App\DTOs\GiftFilterDTO;
use App\Models\Gift;

interface GiftScoringStrategyInterface
{
    public function score(Gift $gift, GiftFilterDTO $filter): int;
}
