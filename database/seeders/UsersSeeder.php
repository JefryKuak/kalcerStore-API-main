<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['id_pelanggan' => 1, 'fullname' => 'Tsani', 'email' => 'muhammadazarustsani@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$GlsoYZKBye2YJEFqX4EPO.tY9NXVLuSrIzg2zEXEfaWb/IfkUnkh2', 'role' => 'user'],
            ['id_pelanggan' => 2, 'fullname' => 'Azharus Tsani', 'email' => 'user1@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$L4cfkv3TnpSewVOwtW2sQ.EMz7e1BXhlWCwJ7mC7r2pUMecR.8jXq', 'role' => 'admin'],
            ['id_pelanggan' => 3, 'fullname' => 'samuel', 'email' => 'user2@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$5quYlFn0fcTshWYb4trGHufo1Lygc7Rm5pZkpR/agGsq1IdVPwRvO', 'role' => 'admin'],
            ['id_pelanggan' => 4, 'fullname' => 'Kiel', 'email' => 'user3@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$hynXDjcK/uASarbUr96/SuPijWanQqy0s.W4yq9M6H4fT7wn72WbO', 'role' => 'user'],
            ['id_pelanggan' => 5, 'fullname' => 'Arkadian', 'email' => 'user4@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$Ceu4hCvSEXLkO5DN7iWDjOPoMLnghdeGPEgYuJYvTAxEKjSVeFeQu', 'role' => 'user'],
            ['id_pelanggan' => 6, 'fullname' => 'Noel Anggit', 'email' => 'user5@gmail.com', 'foto_profil' => null, 'whatsapp' => '085815899591', 'password' => '$2y$10$l89.frRmiue1EdN5hsfMRu4i40K3cpB1tD.6NEuR05alTj4tNmF8q', 'role' => 'user'],
            ['id_pelanggan' => 7, 'fullname' => 'noel', 'email' => 'noel@gmail.com', 'foto_profil' => null, 'whatsapp' => '', 'password' => '$2y$10$dJsnDXjdstgSHYKs2SgGVOT1KIGVS0K50GtRArO2O9Wet9KQLC1Om', 'role' => 'user'],
            ['id_pelanggan' => 8, 'fullname' => 'Yehezkiel Hatoguan Siahaan', 'email' => 'kiel123@gmail.com', 'foto_profil' => null, 'whatsapp' => '081234567890', 'password' => '$2y$10$mIE4k/3ETEuKjpuDXFw08.ITAlMCjJrH6j2ZLwncLg2Z8weI6iU4W', 'role' => 'user'],
        ]);
    }
}
