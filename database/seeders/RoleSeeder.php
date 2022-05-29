<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Admin permissions
        $viewAdminDashboard = Permission::create(['name' => 'view admin dashboard']);
        $viewWebmasterTools = Permission::create(['name' => 'view webmaster tools']);

        // Admin roles
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo($viewAdminDashboard);

        $webmaster = Role::create(['name' => 'webmaster']);
        $webmaster->givePermissionTo($viewAdminDashboard, $viewWebmasterTools);


        Role::create(['name' => 'artist']);



        /*
        // Artist permissions
        // TODO: S'ha d'estudiar com fer-ho. La idea es crear rols que només puguin tenir els artistes i assignar permissos
        $platinum = Role::create(['name' => 'platinum']);
        $gold = Role::create(['name' => 'gold']);
        $silver = Role::create(['name' => 'silver']);

        // Platinum permissions
        $setImageInHomeSlider = Permission::create(['name' => 'set image in home slider']);
        $platinum->givePermissionTo($setImageInHomeSlider);
        */
    }
}
