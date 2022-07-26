<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->constrained('roles')->onDelete('set null');
        });

        $adminUser = ['name' => 'admin', 'email' => 'admin@mail.com', 'email_verified_at' => now(), 'password' => Hash::make("adminadmin"), 'role_id' => 1, 'created_at'=> now()];

        DB::table('users')->insert($adminUser);

        $guestUser = ['name' => 'Zrin', 'email' => 'zrin.crnjac@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make("12345678"), 'role_id' => 4, 'created_at' => now()];

        DB::table('users')->insert($guestUser);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
