<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        user::create([
            'name' => 'futsal',
            'email' => 'futsal@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'futsal'
        ]);
        user::create([
            'name' => 'dance',
            'email' => 'dance@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'dance'
        ]);
        user::create([
            'name' => 'pmr',
            'email' => 'pmr@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'pmr'
        ]);
        user::create([
            'name' => 'olip',
            'email' => 'olip@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa'
        ]);  

        $users = [
            ['name' => 'IBRAHIM', 'email' => 'IBRAHIM@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'IBRAHIM RIZKY FADILAH', 'email' => 'IBRAHIMRIZKY@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'IKSAN DINATA', 'email' => 'IKSAN@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'ILHAM BINTANG HERLAMBANG', 'email' => 'ILHAM@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'JULIAN FERNANDO EKAPANCA PUTRA', 'email' => 'julianekafernandoputra@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'KEVIN NUR PRASETYA', 'email' => 'kevinnurprasetyo@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'KHAFIDATUL RAHMA', 'email' => 'khafidatulrahma@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'KHOLIFA AZ-ZAHRO NURANI', 'email' => 'kholifaazahronuraini@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'LOVIANNO DESTA SATRIAVIAN', 'email' => 'lovinodestasatriavian@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD IRFAN MAULANA', 'email' => 'muhammadirfanmaulana@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MAHESTU BAGUS SENARU PRATAMA', 'email' => 'mahestubagussenarupratama@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MAULAANAA YAHYA', 'email' => 'maulanayahya@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MAULANA GUSTAF DZIKRULLOH', 'email' => 'maulanagustaf@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MOCHAMMAD DWI FEBRIANSYAH', 'email' => 'mochammaddwifebriansyah@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMAD ALDI SULINARTA', 'email' => 'muhammadaldisulinarta@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD ALIF ADIAWAN', 'email' => 'alifadiawan2005@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD AMMAR MUZHAFFAR', 'email' => 'muhammadammarmuzhaffar@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD BINTANG YUSUF', 'email' => 'muhammadbintangyusuf@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD DLIYAAUL HAQ SHIDQEY', 'email' => 'muhammaddliyaaul@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD RAFIF AL AZHAR', 'email' => 'muhammadrafifalazhar@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD RIFKY RAMADHANI', 'email' => 'muhammadrifkyramadhani@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'MUHAMMAD TSANY FULVANSYAH', 'email' => 'muhammadtsanyfulvansyah@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'NADHIRA SHAFA BABY PERMADI', 'email' => 'nadhirasyafa@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'RAFLI DWI FERDANSYAH', 'email' => 'raflidwi@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'RAHMAD RIZKI FIRMANSYAH', 'email' => 'rahmadriskifirmansyah@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'RENALDY NAUFAL TSABITUL AZMI', 'email' => 'renaldynaufalh@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'RIZKY MARCELLINO', 'email' => 'rizkymarcellino@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'ROBET ALFAHMI', 'email' => 'robetalfahmi@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'RYAN WAHYU SYAHPUTRA', 'email' => 'ryanwahyu@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'STEVEN ALDEN AIRLANGGA C. K. M M.', 'email' => 'stevenalden@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'TORA DIGDA KRISTIAWAN', 'email' => 'toradigda@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'VARDANI NAFIANUR ROSIDANINGRUM', 'email' => 'vardaninafianur@gmail.com', 'password' => bcrypt('siswa123')],
            ['name' => 'VITA FEBRIANI PUTRI', 'email' => 'vitafebriani@gmail.com', 'password' => bcrypt('siswa123')],
        ];
        User::insert($users);
    }
}
