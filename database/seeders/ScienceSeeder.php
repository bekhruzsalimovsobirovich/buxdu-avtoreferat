<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['cipher' => '01.01.00', 'name' => 'Matematika'],
            ['cipher' => '01.02.00', 'name' => 'Mexanika'],
            ['cipher' => '01.03.00', 'name' => 'Astronomiya'],
            ['cipher' => '01.04.00', 'name' => 'Fizika'],
            ['cipher' => '02.00.00', 'name' => 'Kimyo fanlari'],
            ['cipher' => '03.00.00', 'name' => 'Biologiya fanlari'],
            ['cipher' => '04.00.00', 'name' => 'Geologiya- mineralogiya fanlari'],
            ['cipher' => '05.00.00', 'name' => 'Texnika fanlari'],
            ['cipher' => '05.02.00', 'name' => 'Mashinasozlik va mashinashunoslik. Mashinasozlikda materiallarga ishlov berish. Metallurgiya. Aviasiya texnikasi'],
            ['cipher' => '05.03.00', 'name' => 'Asbobsozlik, metrologiya va axborot-o\'lchov asboblari va tizimlari'],
            ['cipher' => '05.04.00', 'name' => 'Radiotexnika va aloqa'],
            ['cipher' => '05.05.00', 'name' => 'Energetika va elektrotexnika. Qishloq xo\'jaligi ishlab chiqarishini elektrlashtirish texnologiyasi. Elektronika'],
            ['cipher' => '05.06.00', 'name' => 'To\'qimachilik va yengil sanoat materiallari va buyumlari texnologiyasi'],
            ['cipher' => '05.07.00', 'name' => 'Qishloq xo\'jaligi ishlab chiqarishini mexanizasiyalash texnologiyasi'],
            ['cipher' => '05.08.00', 'name' => 'Transport'],
            ['cipher' => '05.09.00', 'name' => 'Qurilish'],
            ['cipher' => '05.10.00', 'name' => 'Inson faoliyati xavfsizligi'],
            ['cipher' => '06.01.00', 'name' => 'Agronomiya'],
            ['cipher' => '06.02.00', 'name' => 'Zootexniya'],
            ['cipher' => '06.03.00', 'name' => 'O\'rmon xo\'jaligi'],
            ['cipher' => '07.00.00', 'name' => 'Tarix fanlari'],
            ['cipher' => '08.00.00', 'name' => 'Iqtisodiyot fanlar'],
            ['cipher' => '09.00.00', 'name' => 'Falsafa fanlari'],
            ['cipher' => '10.00.00', 'name' => 'Filologiya fanlari'],
            ['cipher' => '11.00.00', 'name' => 'Geografiya fanlari'],
            ['cipher' => '12.00.00', 'name' => 'Yuridik fanlar'],
            ['cipher' => '13.00.00', 'name' => 'Pedagogika fanlari'],
            ['cipher' => '14.00.00', 'name' => 'Tibbiyot fanlari'],
            ['cipher' => '15.00.00', 'name' => 'Farmatsevtika fanlari'],
            ['cipher' => '16.00.00', 'name' => 'Veterinariya fanlari'],
            ['cipher' => '17.00.00', 'name' => 'San\'atshunoslik fanlari'],
            ['cipher' => '18.00.00', 'name' => 'Arxitektura'],
            ['cipher' => '19.00.00', 'name' => 'Psixologiya fanlari'],
            ['cipher' => '22.00.00', 'name' => 'Sosiologiya fanlari'],
            ['cipher' => '23.00.00', 'name' => 'Siyosiy fanlar'],
            ['cipher' => '24.00.01', 'name' => 'Islomshunoslik fanlari'],
        ];

        foreach ($data as $item) {
            \App\Domain\Sciences\Models\Science::updateOrCreate(
                ['cipher' => $item['cipher']],
                ['name' => $item['name']]
            );
        }
    }
}
