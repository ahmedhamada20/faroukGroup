<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function conteactIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::HOMECONTECT)->paginate(10),
        ];
        return view('admin.Contact.index', $data);
    }
}
