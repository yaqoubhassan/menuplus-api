<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $menus = [
            [
                'name' => 'Authentication',
                'page' => 'authentication',
                'children' => [
                    ['method' => 'POST', 'title' => 'Super Admin Login', 'page' => 'super-admin-login'],
                    ['method' => 'POST', 'title' => 'Restaurant User Login', 'page' => 'restaurant-user-login'],
                    ['method' => 'POST', 'title' => 'Waiter Login', 'page' => 'waiter-login'],
                    ['method' => 'POST', 'title' => 'Diner Login', 'page' => 'diner-login'],
                    ['method' => 'GET', 'title' => 'Logout', 'page' => 'logout'],
                ]
            ],
            [
                'name' => 'Super Admin',
                'page' => 'super-admin',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                    ['method' => 'DELETE', 'title' => 'Delete', 'page' => 'delete'],
                    ['method' => 'PATCH', 'title' => 'Update', 'page' => 'update'],
                ]
            ],
            [
                'name' => 'Restaurant',
                'page' => 'restaurant',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                    ['method' => 'DELETE', 'title' => 'Delete', 'page' => 'delete'],
                    ['method' => 'PATCH', 'title' => 'Update', 'page' => 'update'],
                    ['method' => 'GET', 'title' => 'View', 'page' => 'view'],
                    ['method' => 'GET', 'title' => 'Cities Page', 'page' => 'cities-page'],
                    ['method' => 'POST', 'title' => 'Subscribe', 'page' => 'subscribe'],
                    ['method' => 'GET', 'title' => 'List Restaurant Users', 'page' => 'list-restaurant-users'],
                ]
            ],
            [
                'name' => 'Waiter',
                'page' => 'waiter',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                    ['method' => 'DELETE', 'title' => 'Delete', 'page' => 'delete'],
                ]
            ],
            [
                'name' => 'Diner',
                'page' => 'diner',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                ]
            ],
            [
                'name' => 'Product',
                'page' => 'product',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                ]
            ],
            [
                'name' => 'Product Pricing',
                'page' => 'product-pricing',
                'children' => [
                    ['method' => 'GET', 'title' => 'List', 'page' => 'list'],
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                ]
            ],
            [
                'name' => 'Menu',
                'page' => 'menu',
                'children' => [
                    ['method' => 'POST', 'title' => 'Create', 'page' => 'create'],
                ]
            ],
            [
                'name' => 'Search',
                'page' => 'search',
                'children' => [
                    ['method' => 'GET', 'title' => 'Search For Restaurant', 'page' => 'search-for-restaurant'],
                    ['method' => 'GET', 'title' => 'Search For Admin Users', 'page' => 'search-for-admin-users'],
                    ['method' => 'GET', 'title' => 'Search For Restaurant Admins', 'page' => 'search-for-restaurant-admins'],
                ]
            ],
            [
                'name' => 'Rest. Management',
                'page' => 'restaurant-management',
                'children' => [
                    ['method' => 'PATCH', 'title' => 'Update Rest. Details', 'page' => 'update-restaurant-details'],
                    ['method' => 'PATCH', 'title' => 'Update Rest. Admin Details', 'page' => 'update-restaurant-admin-details'],
                ]
            ],
            [
                'name' => 'Generate QR Code',
                'page' => 'generate-qr-code',
                'children' => [
                    ['method' => 'GET', 'title' => 'Restaurant Staff', 'page' => 'restaurant-staff'],
                    ['method' => 'GET', 'title' => 'Restaurant Customer', 'page' => 'restaurant-customer'],
                ]
            ],
        ];

        $page = $request->query('page') ?? 'welcome';

        return view('docs.menuplus.'.$page, compact('menus'));
    }
}
