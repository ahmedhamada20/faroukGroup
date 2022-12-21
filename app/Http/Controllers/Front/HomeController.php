<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
//        return view('front.user.index');
    }

    public function aboutUs()
    {
        return view('front.aboutUs.index');
    }

    public function Agency()
    {
        return view('front.agency.index');
    }
    public function contactUs()
    {
        return view('front.contactUs.index');
    }

    public function consulting()
    {
        return view('front.consulting.index');
    }

    public function services()
    {
        return view('front.services.index');
    }

    public function servicesDetails($id)
    {
        $data = Course::where('category_id',$id)->first();
        return view('front.services.details',compact('data'));
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
            'phone' => 'required|min:11|numeric',
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

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'activity' => $request->activity,
            'name_comppany' => $request->name_comppany,
            'type_company' => $request->type_company,
            'Message' => $request->Message,
            'type_contact' => Contact::HOMECONTECT,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendConsulting(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'phone' => 'required|min:11|numeric',
            'activity' => 'required|min:2|max:255',
            'name_comppany' => 'required|min:2|max:255',
            'data' => 'required',
            'time' => 'required',
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

            'data.required' => __('index.type_companyrequired'),
            'time.required' => __('index.type_companyrequired'),


            'Message.required' => __('index.Messagerequired'),
            'Message.min' => __('index.Messagemin'),

            'phone.required' => __('index.phonerequired'),
            'phone.min' => __('index.phonemin'),
            'phone.numeric' => __('index.phonenumeric'),
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'activity' => $request->activity,
            'name_comppany' => $request->name_comppany,
            'data' => $request->data,
            'time' => $request->time,
            'Message' => $request->Message,
            'type_contact' => Contact::PAGECONSULTING,
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
            'name_comppany' => 'required|min:11|numeric',
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
            'name_comppany' => $request->name_comppany,
            'type_contact' => Contact::PAGECONTENTUS,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendAgency(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'name_comppany' => 'required|min:2',
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
            'name_comppany' => $request->name_comppany,
            'type_contact' => Contact::AGENCY,
        ]);

        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }


    public function sendJop(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|min:2|max:255',
            'phone' => 'required|min:11|numeric',
            'name_comppany' => 'required|min:2',
            'image' => 'required|mimes:png,jpg,jpeg,pdf|max:2065',
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

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
        }

        $new  = new Contact();
        $new->name = $request->name . $request->name_laset;
        $new->email = $request->email;
        $new->subject = $request->subject;
        $new->phone = $request->phone;
        $new->name_comppany = $request->name_comppany;
        $new->image = $filename;
        $new->type_contact = Contact::JOP;
        $new->save();


        return redirect()->back()->with(['success' => __('index.sendsuccessfullyMessage')]);
    }
}
