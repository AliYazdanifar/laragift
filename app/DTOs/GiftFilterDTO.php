<?php

namespace App\DTOs;

class GiftFilterDTO
{
    public function __Construct(
        public readonly int    $age,
        public readonly string $gender,
        public readonly array  $interests,
        public readonly array  $occasions,
        public readonly float  $budget
    )
    {
    }
}
