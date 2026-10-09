<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Daniel Ramos',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Sofia Navarro',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Kevin Bautista',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Angela Flores',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'inventory01',
                'full_name' => 'Mark Villanueva',
                'role'      => 'Inventory Clerk',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}