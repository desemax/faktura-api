<?php

namespace App\Http\Controllers;

use App\Http\Traits\ResponsesTrait;
use App\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    use ResponsesTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $invoices = Invoice::all();

        return $this->success(['invoices' => $invoices]);
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);

        return $this->success(['invoice' => $invoice]);
    }

    public function store(Request $request)
    {
        $invoice = new Invoice;
        $invoice->fill($request->all());
        $invoice->save();

        return $this->success(['invoice' => $invoice]);
    }

    public function update($id, Request $request)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        return $this->success(['invoice' => $invoice], 201);
    }

    public function delete($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return $this->success([], 201);
    }
}
