<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Gestion;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\AlumnoMateria;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        /*
        User::factory()->create([
            'name' => 'Test User', 'email' => 'test@example.com',
        ]);
        */

        DB::table('users')->insert([
            'name' => '2024', 'email' => 'admin@gmail.com', 'password' => Hash::make('123')
        ]);

        $gestiones = [
            ['nombre' => '2023'],
            ['nombre' => '2024']
        ];
        foreach ($gestiones as $gestion){
            Gestion::create($gestion);
        }

        $alumnos = [
            ['nombre' => 'juan', 'apellido' => 'perez', 'telefono' => '76543210'],
            ['nombre' => 'jose', 'apellido' => 'lozano', 'telefono' => '76543220'],
            ['nombre' => 'luis', 'apellido' => 'segovia', 'telefono' => '76543240'],
            ['nombre' => 'marcelo', 'apellido' => 'martinez', 'telefono' => '76543560'],
            ['nombre' => 'maria', 'apellido' => 'lopez', 'telefono' => '76541210'],
            ['nombre' => 'mathias', 'apellido' => 'lujan', 'telefono' => '76545210'],
            ['nombre' => 'ricardo', 'apellido' => 'peredo', 'telefono' => '72543510'],
            ['nombre' => 'alejandro', 'apellido' => 'sanchez', 'telefono' => '74443210'],
            ['nombre' => 'leonel', 'apellido' => 'jimenez', 'telefono' => '76543550'],
            ['nombre' => 'pedro', 'apellido' => 'zeballos', 'telefono' => '76500210']
        ];
        foreach ($alumnos as $alumno){
            Alumno::create($alumno);
        }
        
        $docentes = [
            ['nombre' => 'Ezequiel Illanez', 'profesion' => 'Ingeniero de Sistemas'],
            ['nombre' => 'Pedro Fernández', 'profesion' => 'Ingeniero en Telecomunicaciones'],
            ['nombre' => 'Ana Martínez', 'profesion' => 'Administradora de Bases de Datos'],
            ['nombre' => 'Fernando Ruiz', 'profesion' => 'Analista de Sistemas'],
            ['nombre' => 'Jorge Díaz', 'profesion' => 'Ingeniero Electrónico']
        ];
        foreach ($docentes as $docente){
            Docente::create($docente);
        }

        $materias = [
            ['nombre' => 'Algoritmos y Estructuras de Datos', 'id_docente' => 1, 'id_gestion' => 1],
            ['nombre' => 'Bases de Datos', 'id_docente' => 2, 'id_gestion' => 1],
            ['nombre' => 'Programación Orientada a Objetos', 'id_docente' => 3, 'id_gestion' => 1],
            ['nombre' => 'Sistemas Operativos', 'id_docente' => 4, 'id_gestion' => 1]
        ];
        foreach ($materias as $materia){
            Materia::create($materia);
        }

        $alumnoMaterias = [
            ['nota' => 85, 'id_alumno' => 1, 'id_materia' => 1],
            ['nota' => 90, 'id_alumno' => 1, 'id_materia' => 2],
            ['nota' => 78, 'id_alumno' => 1, 'id_materia' => 3],
            ['nota' => 92, 'id_alumno' => 2, 'id_materia' => 1],
            ['nota' => 88, 'id_alumno' => 2, 'id_materia' => 2],
            ['nota' => 79, 'id_alumno' => 2, 'id_materia' => 3],
            ['nota' => 84, 'id_alumno' => 3, 'id_materia' => 1],
            ['nota' => 91, 'id_alumno' => 3, 'id_materia' => 2],
            ['nota' => 73, 'id_alumno' => 3, 'id_materia' => 3],
            ['nota' => 89, 'id_alumno' => 4, 'id_materia' => 1],
            ['nota' => 95, 'id_alumno' => 4, 'id_materia' => 2],
            ['nota' => 82, 'id_alumno' => 4, 'id_materia' => 3],
            ['nota' => 87, 'id_alumno' => 5, 'id_materia' => 1],
            ['nota' => 93, 'id_alumno' => 5, 'id_materia' => 2],
            ['nota' => 80, 'id_alumno' => 5, 'id_materia' => 3]
        ];
        foreach ($alumnoMaterias as $alumnoMateria){
            AlumnoMateria::create($alumnoMateria);
        }
        
    }
}
