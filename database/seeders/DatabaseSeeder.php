<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\kelas;
use App\Models\ekstrakulikuler;

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
            ['name' => 'IBRAHIM', 'email' => 'ibrahim@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'IBRAHIM RIZKY FADILAH', 'email' => 'ibrahimrizkyfadilah@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'IKSAN DINATA', 'email' => 'IKSAN@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'ILHAM BINTANG HERLAMBANG', 'email' => 'ILHAM@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'JULIAN FERNANDO EKAPANCA PUTRA', 'email' => 'julianekafernandoputra@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'KEVIN NUR PRASETYA', 'email' => 'kevinnurprasetyo@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'KHAFIDATUL RAHMA', 'email' => 'khafidatulrahma@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'KHOLIFA AZ-ZAHRO NURANI', 'email' => 'kholifaazahronuraini@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'LOVIANNO DESTA SATRIAVIAN', 'email' => 'lovinodestasatriavian@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD IRFAN MAULANA', 'email' => 'muhammadirfanmaulana@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MAHESTU BAGUS SENARU PRATAMA', 'email' => 'mahestubagussenarupratama@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MAULAANAA YAHYA', 'email' => 'maulanayahya@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MAULANA GUSTAF DZIKRULLOH', 'email' => 'maulanagustaf@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MOCHAMMAD DWI FEBRIANSYAH', 'email' => 'mochammaddwifebriansyah@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMAD ALDI SULINARTA', 'email' => 'muhammadaldisulinarta@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD ALIF ADIAWAN', 'email' => 'alifadiawan2005@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD AMMAR MUZHAFFAR', 'email' => 'muhammadammarmuzhaffar@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD BINTANG YUSUF', 'email' => 'muhammadbintangyusuf@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD DLIYAAUL HAQ SHIDQEY', 'email' => 'muhammaddliyaaul@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD RAFIF AL AZHAR', 'email' => 'muhammadrafifalazhar@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD RIFKY RAMADHANI', 'email' => 'muhammadrifkyramadhani@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'MUHAMMAD TSANY FULVANSYAH', 'email' => 'muhammadtsanyfulvansyah@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'NADHIRA SHAFA BABY PERMADI', 'email' => 'nadhirasyafa@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'RAFLI DWI FERDANSYAH', 'email' => 'raflidwi@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'RAHMAD RIZKI FIRMANSYAH', 'email' => 'rahmadriskifirmansyah@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'RENALDY NAUFAL TSABITUL AZMI', 'email' => 'renaldynaufalh@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'RIZKY MARCELLINO', 'email' => 'rizkymarcellino@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'ROBET ALFAHMI', 'email' => 'robetalfahmi@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'RYAN WAHYU SYAHPUTRA', 'email' => 'ryanwahyu@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'STEVEN ALDEN AIRLANGGA C. K. M M.', 'email' => 'stevenalden@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'TORA DIGDA KRISTIAWAN', 'email' => 'toradigda@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'VARDANI NAFIANUR ROSIDANINGRUM', 'email' => 'vardaninafianur@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
            ['name' => 'VITA FEBRIANI PUTRI', 'email' => 'vitafebriani@gmail.com', 'password' => bcrypt('siswa123'), 'role' => 'siswa'],
        ];
        User::insert($users);

        $createMultipleUsers = [
            ['kelas' => '10 AKL 1'],
            ['kelas' => '10 AKL 2'],
            ['kelas' => '10 AKL 3'],
            ['kelas' => '10 AKL 4'],
            ['kelas' => '10 AKL 4'],
            ['kelas' => '10 OTKP 1'],
            ['kelas' => '10 OTKP 2'],
            ['kelas' => '10 OTKP 3'],
            ['kelas' => '10 OTKP 4'],
            ['kelas' => '10 OTKP 5'],
            ['kelas' => '10 RPL 1'],
            ['kelas' => '10 RPL 2'],
            ['kelas' => '10 TKJ 1'],
            ['kelas' => '10 TKJ 2'],
            ['kelas' => '10 MM 1'],
            ['kelas' => '10 MM 2'],
            ['kelas' => '10 BDP 1'],
            ['kelas' => '10 BDP 2'],
            ['kelas' => '10 PH 1'],
            ['kelas' => '10 PH 2'],
            ['kelas' => '10 DKV 1'],
            ['kelas' => '10 DKV 2'],
            ['kelas' => '10 PSPT 1'],
            ['kelas' => '10 PSPT 2'],
            ['kelas' => '11 AKL 1'],
            ['kelas' => '11 AKL 2'],
            ['kelas' => '11 AKL 3'],
            ['kelas' => '11 AKL 4'],
            ['kelas' => '11 AKL 5'],
            ['kelas' => '11 OTKP 1'],
            ['kelas' => '11 OTKP 2'],
            ['kelas' => '11 OTKP 3'],
            ['kelas' => '11 OTKP 4'],
            ['kelas' => '11 OTKP 5'],
            ['kelas' => '11 RPL 1'],
            ['kelas' => '11 RPL 2'],
            ['kelas' => '11 TKJ 1'],
            ['kelas' => '11 TKJ 2'],
            ['kelas' => '11 MM 1'],
            ['kelas' => '11 MM 2'],
            ['kelas' => '11 BDP 1'],
            ['kelas' => '11 BDP 2'],
            ['kelas' => '11 PH 1'],
            ['kelas' => '11 PH 2'],
            ['kelas' => '11 DKV 1'],
            ['kelas' => '11 DKV 2'],
            ['kelas' => '11 PSPT 1'],
            ['kelas' => '11 PSPT 2'],
            ['kelas' => '12 AKL 1'],
            ['kelas' => '12 AKL 2'],
            ['kelas' => '12 AKL 3'],
            ['kelas' => '12 AKL 4'],
            ['kelas' => '12 AKL 5'],
            ['kelas' => '12 OTKP 1'],
            ['kelas' => '12 OTKP 2'],
            ['kelas' => '12 OTKP 3'],
            ['kelas' => '12 OTKP 4'],
            ['kelas' => '12 OTKP 5'],
            ['kelas' => '12 RPL 1'],
            ['kelas' => '12 RPL 2'],
            ['kelas' => '12 TKJ 1'],
            ['kelas' => '12 TKJ 2'],
            ['kelas' => '12 MM 1'],
            ['kelas' => '12 MM 2'],
            ['kelas' => '12 BDP 1'],
            ['kelas' => '12 BDP 2'],
            ['kelas' => '12 PH 1'],
            ['kelas' => '12 PH 2'],
            ['kelas' => '12 DKV 1'],
            ['kelas' => '12 DKV 2'],
            ['kelas' => '12 PSPT 1'],
            ['kelas' => '12 PSPT 2']
        ];
        kelas::insert($createMultipleUsers); // Eloquent


        $createMultipleUsers1 = [
            ['nama_ekskul' => 'Dance'],
            ['nama_ekskul' => 'PMR'],
            ['nama_ekskul' => 'Basket']
        ];
        ekstrakulikuler::insert($createMultipleUsers1); // Eloquent;
    }
}
