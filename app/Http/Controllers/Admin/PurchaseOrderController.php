<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// refernce all models you'll be needing

class PurchaseOrderController extends Controller
{
    public function index($id) {
        // Renders all Purchase Orders in table
    }

    public function create() {
        // Renders view with form for users to create new Purchase Order
    }

    public function store(Request $request) {
        // Check user authenticated
        // generate uuid and prepend 'POD-' to it
        // Save Purchase Order as new record
    }

    public function edit($id) {
        // Renders view with form for users to create new Purchase Order
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

    public function pipelineReport(){
        // Retrieve and render all Purchase Orders in report view
            // Select ALL Purchase orders where uuid like 'POD%' and DATE(delivery_date) between now() and now() + 6 months
            // Select ALL Purchase orders where uuid like 'POS%'
            // Select total sum of ALL POS compared to total sum of ALL POD 
    }
}
