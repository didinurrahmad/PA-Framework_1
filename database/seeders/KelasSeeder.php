<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                
                "nama_kelas" => "premium",
            ],
            [    
                "nama_kelas" => "reguler",
            ]
        ];
        foreach ($kelas as $kls) {            
            Kelas::create([                
                'nama_kelas' => $kls["nama_kelas"],                
            ]);        
        }    
    }
}
