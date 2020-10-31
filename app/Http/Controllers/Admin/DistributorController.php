<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index(){
        // Renders all Distributors in table
    }

    public function create() {
        // Renders view with form for users to create new Distributors
    }

    public function store(Request $request) {
        // Check user authenticated
        // Save Distributor as new record
    }

    public function edit($id) {
        // Renders view with form for admin users to edit existing Distributors
    }

    public function update(Request $request) {
        // get request id
        // find record by id then update record 
    }
}
