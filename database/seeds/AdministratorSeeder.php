<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
$administrator->username = "administrator";
$administrator->name = "Site Administrator";
$administrator->email = "admin@me.com";
$administrator->roles = json_encode(["ADMIN"]);
$administrator->password = \Hash::make("admin123");
$administrator->avatar = "saat-ini-tidak-ada-file.png";
$administrator->address = "Sarmili, Bintaro, Tangerang Selatan";
$administrator->phone = "087704306010";
$administrator->save();
$this->command->info("User Admin berhasil diinsert");
    }
}
