<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'ALAUMATRIJA',
                'description' => 'Išgerti 20 alaus per visa savaitgali',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 20,
                'count' => 0,
            ],
            [
                'name' => 'VIDEOGRAFIJA',
                'description' => 'Pasidaryti 5 selfius su lenkais',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 5,
                'count' => 0,
            ],
            [
                'name' => 'LAUZIALOGIJA',
                'description' => 'Pralausti rankom su lenku',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'LIECNOGRAFIJA',
                'description' => 'Gauti 2 panikiu numerius',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 2,
                'count' => 0,
            ],
            [
                'name' => 'BAZNYCMORGIJA',
                'description' => 'Sudalyvauti sekmadieninese misiose',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'CIGIAMORFIJA',
                'description' => 'Surukyti cigariuka trumpiau negu per 40 sekundziu',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'TORNADIJA',
                'description' => 'Pisti alaus tornada, kitaip sukuri',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'BIZNIOLOGIJA',
                'description' => 'Islosti saibu - kaip mum pohui - bet turi papliusinti',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'PRIKOLOGIJA',
                'description' => 'Pasakyti anekdotą lenkui, lenkiskai',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
