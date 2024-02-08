<?php
// app/Console/Commands/GenerateSlots.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Slot;

class GenerateSlots extends Command
{
    protected $signature = 'generate:slots';
    protected $description = 'Generate slots for the next 10 years';

    public function handle()
    {
        $startDate = now();
        $endDate = now()->addYears(10);

        $currentDate = $startDate;
        $slots = [];

        while ($currentDate <= $endDate) {
            $slots[] = [
                'name' => '' . $currentDate->format('Y-m-d'),
                'is_entry' => 50, // You may adjust this based on your requirements
                'is_exit' => 150, // You may adjust this based on your requirements
                'created_at' => $currentDate,
                'updated_at' => $currentDate,
            ];

            $currentDate->addDay();
        }

        Slot::insert($slots);

        $this->info('Slots generated successfully.');
    }
}
