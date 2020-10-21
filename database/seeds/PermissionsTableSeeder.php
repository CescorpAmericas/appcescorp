<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
          'name'         =>'Navegar usuarios',
          'slug'         =>'users.index',
          'description'  =>'Lista y navega todos los usuarios',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de usuario',
          'slug'         =>'users.show',
          'description'  =>'Ver en detalle cada usuario',
        ]);
        Permission::create([
          'name'         =>'Edición usuario',
          'slug'         =>'users.edit',
          'description'  =>'Edita cualquier dato de un usuario',
        ]);
        Permission::create([
          'name'         =>'Eliminar usuario',
          'slug'         =>'users.destroy',
          'description'  =>'Elimina cualquier usuarios',
        ]);

        //roles
        Permission::create([
          'name'         =>'Navegar roles',
          'slug'         =>'roles.index',
          'description'  =>'Lista y navega todos los roles',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de rol',
          'slug'         =>'roles.show',
          'description'  =>'Ver en detalle cada rol',
        ]);
        Permission::create([
          'name'         =>'Creación roles',
          'slug'         =>'roles.create',
          'description'  =>'Crea un rol',
        ]);
        Permission::create([
          'name'         =>'Edición roles',
          'slug'         =>'roles.edit',
          'description'  =>'Edita cualquier dato de un rol',
        ]);

        Permission::create([
          'name'         =>'Eliminar rol',
          'slug'         =>'roles.destroy',
          'description'  =>'Elimina cualquier rol',
        ]);

        ////Embarques/////
        Permission::create([
          'name'         =>'Navegar embarques',
          'slug'         =>'shipments.index',
          'description'  =>'Lista y navega todos los embarques',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de embarque',
          'slug'         =>'shipments.show',
          'description'  =>'Ver en detalle cada embarque',
        ]);
        Permission::create([
          'name'         =>'Creación embarques',
          'slug'         =>'shipments.create',
          'description'  =>'Crea un embarque',
        ]);
        Permission::create([
          'name'         =>'Edición embarques',
          'slug'         =>'shipments.edit',
          'description'  =>'Edita cualquier dato de un embarque',
        ]);

        Permission::create([
          'name'         =>'Eliminar embarque',
          'slug'         =>'shipments.destroy',
          'description'  =>'Elimina cualquier embarque',
        ]);

        ////Facturas emitas/////
        Permission::create([
          'name'         =>'Navegar facturas emitidas',
          'slug'         =>'factemitidas.index',
          'description'  =>'Lista y navega todos las facturas emitidas',
        ]);
        Permission::create([
          'name'         =>'Creación facturas emitidas',
          'slug'         =>'factemitidas.create',
          'description'  =>'Crea una factura emitida',
        ]);
        Permission::create([
          'name'         =>'Edición facturas emitidas',
          'slug'         =>'factemitidas.edit',
          'description'  =>'Edita cualquier dato de una factura emitida',
        ]);

        Permission::create([
          'name'         =>'Eliminar factura emitida',
          'slug'         =>'factemitidas.destroy',
          'description'  =>'Elimina cualquier factura emitida',
        ]);
        ////Facturas  recibidas/////
        Permission::create([
          'name'         =>'Navegar facturas recibidas',
          'slug'         =>'factrecibidas.index',
          'description'  =>'Lista y navega todos las facturas recibidas',
        ]);
        Permission::create([
          'name'         =>'Creación facturas recibidas',
          'slug'         =>'factrecibidas.create',
          'description'  =>'Crea una factura recibida',
        ]);
        Permission::create([
          'name'         =>'Edición facturas recibidas',
          'slug'         =>'factrecibidas.edit',
          'description'  =>'Edita cualquier dato de una factura recibida',
        ]);

        Permission::create([
          'name'         =>'Eliminar factura recibida',
          'slug'         =>'factrecibidas.destroy',
          'description'  =>'Elimina cualquier factura recibida',
        ]);

        ////////Reporte viajes//////////////
        //roles
        Permission::create([
          'name'         =>'Navegar reporte viajes',
          'slug'         =>'repviajes.index',
          'description'  =>'Lista y navega todos los reporte viajes',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de reporte viaje',
          'slug'         =>'repviajes.show',
          'description'  =>'Ver en detalle cada reporte viaje',
        ]);
        Permission::create([
          'name'         =>'Creación reporte viajes',
          'slug'         =>'repviajes.create',
          'description'  =>'Crea un reporte viaje',
        ]);
        Permission::create([
          'name'         =>'Edición reporte viajes',
          'slug'         =>'repviajes.edit',
          'description'  =>'Edita cualquier dato de un reporte viaje',
        ]);

        Permission::create([
          'name'         =>'Eliminar reporte viaje',
          'slug'         =>'repviajes.destroy',
          'description'  =>'Elimina cualquier reporte viaje',
        ]);

    }
}
