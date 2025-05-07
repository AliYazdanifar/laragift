<?php

use Tests\TestCase;
use App\Services\GiftService;
use App\DTOs\GiftFilterDTO;
use App\Repositories\Gift\GiftRepositoryInterface;
use App\Strategies\Scoring\GiftScoringStrategyInterface;
use Illuminate\Support\Collection;
use App\Models\Gift;

class GiftServiceTest extends TestCase
{
    public function test_it_returns_sorted_gifts_based_on_score()
    {
        // Arrange
        $repository = Mockery::mock(GiftRepositoryInterface::class);
        $scoring = Mockery::mock(GiftScoringStrategyInterface::class);

        $gift1 = new Gift(['name' => 'Gift A']);
        $gift2 = new Gift(['name' => 'Gift B']);

        $repository->shouldReceive('all')->andReturn(collect([$gift1, $gift2]));

        $scoring->shouldReceive('score')
            ->with($gift1, Mockery::type(GiftFilterDTO::class))
            ->andReturn(10);

        $scoring->shouldReceive('score')
            ->with($gift2, Mockery::type(GiftFilterDTO::class))
            ->andReturn(20);

        $service = new GiftService($repository, $scoring);

        // Act
        $result = $service->suggestGifts(new GiftFilterDTO([]));

        // Assert
        $this->assertInstanceOf(Collection::class, $result);
        $this->assertEquals(['Gift B', 'Gift A'], $result->pluck('name')->toArray());
    }
}
