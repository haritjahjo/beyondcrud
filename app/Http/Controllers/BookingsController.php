<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookingStoreRequest;

class BookingsController extends Controller
{
    public function store(BookingStoreRequest $request)
    {
        $data = $request->validated();

        dd($data);
    }
}
