<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewClient()
    {
        $clientSlider = Client::get();

        return view('pages.admin.client-slider.view-client', [
            'clientSlider' => $clientSlider,
        ]);
    }

    public function formClient()
    {
        return view('pages.admin.client-slider.add-form-client');
    }

    public function storeClient(Request $request)
    {
        dd('dd');
    }
}
