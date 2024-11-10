<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "sugiura",
            "email" => "sugiura@example.com",
            "password" => bcrypt("sugisugi"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "sato",
            "email" => "sato@example.com",
            "password" => bcrypt("satosato"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "tanaka",
            "email" => "tanaka@example.com",
            "password" => bcrypt("tanatana"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "suzuki",
            "email" => "suzuki@example.com",
            "password" => bcrypt("suzusuzu"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "ito",
            "email" => "ito@example.com",
            "password" => bcrypt("itooitoo"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "takahashi",
            "email" => "takahashi@example.com",
            "password" => bcrypt("takataka"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "watanabe",
            "email" => "watanabe@example.com",
            "password" => bcrypt("watawata"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "yamamoto",
            "email" => "yamamoto@example.com",
            "password" => bcrypt("yamayama"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "nakamura",
            "email" => "nakamura@example.com",
            "password" => bcrypt("nakanaka"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);

        $param = [
            "name" => "kobayashi",
            "email" => "kobayashi@example.com",
            "password" => bcrypt("kobakoba"),
            "email_verified_at" => Carbon::now(),
        ];
        DB::table("users")->insert($param);
    }
}