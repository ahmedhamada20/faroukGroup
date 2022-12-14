<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function aboutUs()
    {
        return view('front.aboutUs.index');
    }

    public function consulting()
    {
        return view('front.consulting.index');
    }

    public function services()
    {
        return view('front.services.index');
    }

    public function servicesDetails()
    {
        return view('front.services.details');
    }

    public function contact()
    {
        return view('front.contact.index');
    }

    public function sendmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'activity' => 'required|min:2|max:255',
            'name_comppany' => 'required|min:2|max:255',
            'type_company' => 'required|min:2|max:255',
            'Message' => 'required|min:2',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'activity.required' => __('index.activityrequired'),
            'activity.min' => __('index.activitymin'),
            'activity.max' => __('index.activitymax'),

            'name_comppany.required' => __('index.name_comppanyrequired'),
            'name_comppany.min' => __('index.name_comppanymin'),
            'name_comppany.max' => __('index.name_comppanymax'),

            'type_company.required' => __('index.type_companyrequired'),
            'type_company.min' => __('index.type_companymin'),
            'type_company.max' => __('index.type_companymax'),

            'Message.required' => __('index.Messagerequired'),
            'Message.min' => __('index.Messagemin'),
        ]);

        Contact::create([
            'name' => $request->name,
            'activity' => $request->activity,
            'name_comppany' => $request->name_comppany,
            'type_company' => $request->type_company,
            'Message' => $request->Message,
            'type_contact' => Contact::HOMECONTECT,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendcontect(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'message' => 'required|min:2',
        ], [
            'name.required' => __('index.namerequired'),
            'name.min' => __('index.namemin'),
            'name.max' => __('index.namemax'),

            'email.required' => __('index.emailrequired'),
            'email.min' => __('index.emailmin'),
            'email.max' => __('index.emailmax'),
            'email.email' => __('index.emailemail'),

            'subject.required' => __('index.subjectrequired'),
            'subject.min' => __('index.subjectmin'),
            'subject.max' => __('index.subjectmax'),

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),

            'message.required' => __('index.Messagerequired'),
            'message.min' => __('index.Messagemin'),
        ]);

        Contact::create([
            'name' => $request->name . $request->name_laset,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'Message' => $request->message,
            'type_contact' => Contact::PAGECONTENTUS,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }
}
