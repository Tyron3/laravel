<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    // Add protected fillable variables: 
        // uuid
        // product_id
        // quantity
        // total_ex_vat
        // purchase_order_status
    // Use function to link a Purchase Order to many Products
    // Use function to link a Purchase Order to many Purchase Order Statuses
}
