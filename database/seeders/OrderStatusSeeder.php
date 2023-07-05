<?php

namespace Database\Seeders;

use App\Helpers\Enums\OrderStatusesEnum;
use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = collect(OrderStatusesEnum::cases());
        $statuses->each(fn($status) => OrderStatus::firstOrCreate(['name' => $status->value]));
    }
}
