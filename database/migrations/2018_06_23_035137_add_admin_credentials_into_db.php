<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@email.com', 'password' => 'passpass', 'role' => 'admin']

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
