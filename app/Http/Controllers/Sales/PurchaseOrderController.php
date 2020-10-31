<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// refernce all models you'll be needing

class PurchaseOrderController extends Controller
{
    public function index($id) {
        // Renders all Purchase Orders in table
    }

    public function edit($id) {
        // Renders view with form for users to edit existing Purchase Order
    }

    public function update(Request $request) {
        // get request uuid and status
        // add switch case for status
            // if status = approve, call processPurchaseOrder function with request data
            // if status = rejected, then use the uuid to find record and update status
    }

    protected function processPurchaseOrder(Request $request) {
        // use the uuid from request data and prepend with 'POS-' to create new uuid
        // save all information as new record with new uuid
    }
}
