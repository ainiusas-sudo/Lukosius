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
                'name' => 'STARTALOGIJA',
                'description' => 'Paprašyk Ainiaus pusryčių ir suvalgyk ką gausi',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'ALAUMATRIJA',
                'description' => 'Išgerti 20 alaus per visą savaitgalį',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 20,
                'count' => 0,
            ],
            [
                'name' => 'VIDEOGRAFIJA',
                'description' => 'Pasidaryti 5 selfius su lenkais(su Arturka nesiskaito)',
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
                'description' => 'Gauti 2 panikių numerius',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 2,
                'count' => 0,
            ],
            [
                'name' => 'BAZNYCMORGIJA',
                'description' => 'Sudalyvauti sekmadieninėse mišiose',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'FULETAS',
                'description' => 'Įpisti į stulpą iš kamuolio, atstumas ne mažiau kaip 11 metrų',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'GAMOLOGIJA',
                'description' => 'Aplošti Arcade bare lenką',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'KARSTOGRAFIJA',
                'description' => 'HOT CHIP challenge',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'SHOTOMATIKA',
                'description' => 'Išgerti 5 shotus',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 5,
                'count' => 0,
            ],
            [
                'name' => 'CIGIAMORFIJA',
                'description' => 'Surukyti cigariuką trumpiau negu per 40 sekundžių',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'OPERATURA',
                'description' => 'Paskambinti Operatoriui per FaceTime',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'NORMALIZACIJA',
                'description' => 'Pabūti po dušu bent 20 minučių',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'TORNADIJA',
                'description' => 'Pisti alaus tornadą, kitaip sukuri',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'BIZNIOLOGIJA',
                'description' => 'Išlosti šaibų - kaip mum pohui - bet turi papliusinti',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'PRIKOLOGIJA',
                'description' => 'Pasakyti anekdotą lenkui, lenkiškai',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'KASIOLOGIJA',
                'description' => '10 taiklių metimų į žaislinį kašį',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'TRASHNOGRAFIJA',
                'description' => 'Nusitrešti 5 cigariukus iš lenkų',
                'status' => Task::STATUS_IN_PROGRESS,
            ],
            [
                'name' => 'SULCIOOMANIJA',
                'description' => 'Išgerti 5 stiklines skirtingų lenkiškų sulčių(galima su prosecu)',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 5,
                'count' => 0,
            ],
            [
                'name' => 'KOKTEILIOMANIJA',
                'description' => 'Išgerti 5 kokteilių',
                'status' => Task::STATUS_IN_PROGRESS,
                'goal' => 5,
                'count' => 0,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
