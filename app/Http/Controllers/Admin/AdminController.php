<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactExport;
use App\Exports\ContactMessageExport;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\RequestSercice;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function jopsIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::JOP)->paginate(10),
        ];
        return view('admin.Contact.JOP', $data);
    }

    public function supcpations()
    {
        $data = [
            'data' => RequestSercice::paginate(10),
        ];
        return view('admin.supcpations.index', $data);
    }



    public function AgencyIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::AGENCY)->paginate(10),
        ];
        return view('admin.Contact.Agency', $data);
    }

    public function conteactIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::HOMECONTECT)->paginate(10),
        ];
        return view('admin.Contact.index', $data);
    }

    public function consultingIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::PAGECONSULTING)->paginate(10),
        ];
        return view('admin.Contact.consulting', $data);
    }


    public function downloadContect()
    {
        return Excel::download(new ContactExport, 'ContactExport.xlsx');
    }

    public function conteactMessageIndex()
    {
        $data = [
            'data' => Contact::where('type_contact', Contact::PAGECONTENTUS)->paginate(10),
        ];
        return view('admin.Contact.contact', $data);
    }


    public function downloadMesageContect()
    {
        return Excel::download(new ContactMessageExport, 'ContactMessageExport.xlsx');
    }
}
