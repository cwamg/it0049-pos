<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'full_name' => 'Andrea Santos',
                'email'     => 'andrea.santos@example.com',
                'phone'     => '0917-000-0001',
            ],
            [
                'full_name' => 'Miguel Reyes',
                'email'     => 'miguel.reyes@example.com',
                'phone'     => '0917-000-0002',
            ],
            [
                'full_name' => 'Camille Garcia',
                'email'     => 'camille.garcia@example.com',
                'phone'     => '0917-000-0003',
            ],
            [
                'full_name' => 'Joshua Mendoza',
                'email'     => 'joshua.mendoza@example.com',
                'phone'     => '0917-000-0004',
            ],
            [
                'full_name' => 'Patricia Cruz',
                'email'     => 'patricia.cruz@example.com',
                'phone'     => '0917-000-0005',
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}