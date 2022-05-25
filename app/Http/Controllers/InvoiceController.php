<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(Request $r) {
        $invoices = Invoice::all();
        return $invoices;
    }

    //
    public function findOne(Request $r) {
        $invoice = Invoice::find($r->id);
        return $invoice;
    }

    public function add(Request $r) {
        $datas = Invoice::only(['description', 'valor']);
        $newInvoice = Invoice::create($datas);
        return $newInvoice;
    }
}
