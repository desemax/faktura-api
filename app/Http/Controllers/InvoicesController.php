<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $invoices = Invoice::all();

        return response()->json([
            'status' => 'success',
            'data'=> [compact('invoices')],
        ]);
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data'=> [compact('invoice')],
        ]);
    }

    public function store(Request $request)
    {
        $invoice = new Invoice;
        $invoice->fill($request->all());
        $invoice->save();

        return response()->json([
            'status' => 'success',
            'data'=> [compact('invoice')],
        ]);
    }

    public function update($id, Request $request)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        return response()->json([
            'status' => 'success',
            'data'=> [compact('invoice')],
        ]);
    }

    public function delete($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return response()->json([
            'status' => 'success',
        ]);
    }

    //
}
