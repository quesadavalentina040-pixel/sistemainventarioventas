<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class Proveedorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.proveedores.formproveedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los campos que definimos en la base de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nit_documento' => 'nullable|string|max:255|unique:proveedores,nit_documento',
            'telefono' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'direccion' => 'nullable|string|max:255',
            'contacto' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo',
        ]);

        // Guardamos el proveedor
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->post('nombre');
        $proveedor->nit_documento = $request->post('nit_documento');
        $proveedor->telefono = $request->post('telefono');
        $proveedor->email = $request->post('email');
        $proveedor->direccion = $request->post('direccion');
        $proveedor->contacto = $request->post('contacto');
        $proveedor->estado = $request->post('estado');
        $proveedor->save();

        // Redirigimos de nuevo al formulario con mensaje de éxito
        return redirect()
            ->route('proveedores.create')
            ->with('success', '¡Proveedor registrado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
