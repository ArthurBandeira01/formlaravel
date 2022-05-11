<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'id'                  => 1,
            'name'                => 'Arthur',
            'document_number'     => '18530249100',
            'email'               => 'arthur@gmail.com',
            'phone'               => '51992047789',
            'defaulter'           => 1,
            'sex'                 => 'm',
            'marital_status'      => 'Solteiro',
            'physical_disability' => 'Nenhum',
            'company_name'        => 'Alpha',
            'client_type'         => \App\Models\Client::TYPE_INDIVIDUAL
        ]);
    }
}
