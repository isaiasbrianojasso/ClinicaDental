<?php

use Illuminate\Database\Seeder;
use App\User;
class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $usuario= new User();
     $usuario->id=1;
     $usuario->name="Isaias Briano";
     $usuario->rol="admin";
     $usuario->telegram=123456789;
     $usuario->activo=1;//1 si 0 no
     $usuario->email="gomezlopeznapoleon@gmail.com";
     $usuario->password=bcrypt('12345678');
     $usuario->save();    }
}
