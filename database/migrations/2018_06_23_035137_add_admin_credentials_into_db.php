<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
class AddAdminCredentialsIntoDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
$pass= Hash::make('passpass');
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@email.com', 'password' => $pass, 'role' => 'admin']

            ]);
        



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('users')->where('role', 'admin')->delete();

   
    }
}
