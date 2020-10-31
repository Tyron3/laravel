<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        // Renders all Supplier in table
    }

    public function create() {
        // Renders view with form for users to create new Suppliers
    }

    public function store(Request $request) {
        // Check user authenticated
        // Save Supplier as new record
    }

    public function edit($id) {
        // Renders view with form for admin users to edit existing Suppliers
    }

    public function update(Request $request) {
        // get request id
        // find record by id then update record 
    }
}
