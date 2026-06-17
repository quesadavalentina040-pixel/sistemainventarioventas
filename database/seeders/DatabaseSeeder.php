<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear los roles predeterminados si no existen
        \App\Models\Role::firstOrCreate(['nombre' => 'Admin'], ['descripcion' => 'Administrador del sistema']);
        \App\Models\Role::firstOrCreate(['nombre' => 'Vendedor'], ['descripcion' => 'Vendedor de insumos']);
        \App\Models\Role::firstOrCreate(['nombre' => 'Cliente'], ['descripcion' => 'Cliente / Productor']);

        // Crear usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => 1,
        ]);
    }
}
