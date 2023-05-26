<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notificaciones')->insert([
            [
                'nombre' => 'Notificación 1',
                'contenido' => 'Contenido de la notificación 1',
                'fecha' => now(),
            ],
            [
                'nombre' => 'Notificación 2',
                'contenido' => 'Contenido de la notificación 2',
                'fecha' => now(),
            ],
            // Agrega más registros de prueba aquí si es necesario
        ]);
    }
}
