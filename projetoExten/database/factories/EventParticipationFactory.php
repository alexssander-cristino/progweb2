<?php

namespace Database\Factories;

use App\Models\EventParticipation;
use App\Models\Volunteer;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventParticipationFactory extends Factory
{
    protected $model = EventParticipation::class;

    public function definition()
    {
        return [
            'volunteer_id' => Volunteer::factory(), // cria voluntário novo e associa
            'event_id' => Event::factory(),         // cria evento novo e associa
        ];
    }
}
