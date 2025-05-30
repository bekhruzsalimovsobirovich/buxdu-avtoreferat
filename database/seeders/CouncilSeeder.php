<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouncilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "code" => "DSc.03/04.06.2021.Fil.72.09",
                "name" => "Raqamli filologiya fanlari doktori (DSc) darajasini beruvchi ilmiy kengash",
            ],
            [
                "code" => "DSc.03/04.06.2021.Fil.72.03",
                "name" => "Raqamli filologiya fanlari fan doktori (DSc) darajasini beruvchi ilmiy kengash; (xorijiy)",
            ],
            [
                "code" => "DSc.03/27.02.2020.F.72.08",
                "name" => "Raqamli falsafa fanlari doktori (DSc) darajasini beruvchi ilmiy kengash",
            ],
            [
                "code" => "DSc 03/04.10.2024.P72.06",
                "name" => "Raqamli Psixologiya fanlari doktori (DSc) darajasini beruvchi ilmiy kengash",
            ],
            [
                "code" => "DSc 03/27.09.2024.Tar.72.07",
                "name" => "Raqamli Tarix fanlari doktori (DSc) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "DSc 03/27.09.2024.I. 72.05",
                "name" => "Raqamli Iqtisod fanlari doktori (DSc) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/30.12.2019.K.72.01",
                "name" => "Raqamli kimyo fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/30.12.2019.B.72.02",
                "name" => "Raqamli biologiya fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/30.12.2019.Ped.72.04",
                "name" => "Raqamli pedagogika fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/27.09.2024.Ped.72.09",
                "name" => "Raqamli (xorijiy) pedagogika fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/27.09.2024.Ped.72.10",
                "name" => "Raqamli pedagogika fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ],
            [
                "code" => "PhD.03/05.04.2025.FM.72.12",
                "name" => "Raqamli fizika fanlari bo‘yicha falsafa doktori (PhD) darajasini beruvchi ilmiy kengash"
            ]
        ];

        foreach ($data as $item) {
            \App\Domain\Councils\Models\Council::create($item);
        }
    }
}
