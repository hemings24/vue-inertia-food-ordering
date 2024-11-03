<?php

namespace Database\Seeders;
use App\Enums\RoleName;
use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   public function run(): void
   {
      $this->createAdminUser();
      $this->createVendorUser();
      $this->createCustomerUser();
      $this->createStaffUser();
   }

   public function createAdminUser()
   {
      User::create([
         'name'     => 'Admin',
         'email'    => 'admin@admin.com',
         'password' => bcrypt('password'),
      ])->roles()->sync(Role::where('name', RoleName::ADMIN->value)->first());
   }

   public function createVendorUser()
   {
      $vendor = User::create([
         'name'     => 'Restaurant Owner',
         'email'    => 'vendor@vendor.com',
         'password' => bcrypt('password'),
      ]);

      $vendor->roles()->sync(Role::where('name', RoleName::VENDOR->value)->first());

      $vendor->restaurant()->create([
         'city_id' => City::where('name', 'Vilnius')->value('id'),
         'name'    => 'Restaurant 001',
         'address' => 'Address SJV14',
      ]);
   }

   public function createCustomerUser()
   {
      $customer = User::create([
         'name'     => 'Customer',
         'email'    => 'customer@customer.com',
         'password' => bcrypt('password'),
      ]);

      $customer->roles()->sync(Role::where('name', RoleName::CUSTOMER->value)->first());
   }

   public function createStaffUser()
   {
      $staff = User::create([
         'name'     => 'Staff',
         'email'    => 'staff@staff.com',
         'password' => bcrypt('password'),
      ]);

      $staff->roles()->sync(Role::where('name', RoleName::STAFF->value)->first());
   }
}
