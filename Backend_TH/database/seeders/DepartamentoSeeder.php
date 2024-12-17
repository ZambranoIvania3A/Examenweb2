<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;


class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        // Crear el departamento "Reclutamiento y selección"
        Departamento::create([
            'nombre_depa' => 'Reclutamiento y selección',
            'descripcion' => 'Departamento encargado de la contratación de personal.'
        ]);
    }
}
