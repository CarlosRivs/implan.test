<?php

namespace App\Controllers;

use App\Controllers\grocery_CRUD;
use App\Libraries\GroceryCrud;


class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/V_Admin_Panel');
    }

    public function usuarios()
    {
        $crud = new GroceryCrud();

	    $crud->setTable('usuario');

	    $output = $crud->render();

        return view('Admin/V_Admin_Panel').view('Admin/Front/V_Administrador', (array)$output);
    }


    public function mapa()
    {
        return view('Admin/Front/V_mapa');
    }
}