<?php

use App\Invoice;
use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'description' => 'Samsung SF350 Monitor 24" Full HD, 1920 x 1080, 60 Hz, 5 ms, D-Sub,
HDMI, Pannello PLS, Nero | B01BCF0006',
            'denomination' => 129.99,
            'file_path' => 'invoices/Invoice.pdf',
        ]);
    }
}
