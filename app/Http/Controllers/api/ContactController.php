<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        ContactService::store($request->validated());
    }
}
