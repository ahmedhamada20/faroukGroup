<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Customer;
use App\Models\Packages;
use App\Models\RequestSercice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
//        return view('front.user.index');
    }


    public function subscriptionsPost(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|min:2|max:255',
            'phone' => 'required',
            'jobs' => 'required|min:2|max:255',
            'country' => 'required|min:2',
        ]);


        DB::beginTransaction();

        try {

            $subscription = RequestSercice::create([
                'courses_id' => $request->courses_id,
                'packages_id' => $request->packages_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'jobs' => $request->jobs,
                'country' => $request->country,
            ]);

            $data = Customer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => 'no',
                'password' => Hash::make($request->phone),
                'type' => 'active',
            ]);

            RequestSercice::findorfail($subscription->id)->update([
                'customer_id' => $data->id,
            ]);

            DB::commit();
            return redirect()->route('home')->with(['success' => __('index.sendsuccessfullyMessage')]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => 'Please Try Again']);
        }



    }

    public function subscriptions($id, $package)
    {

        $data = [
            'services' => Course::findorfail($id),
            'package' => Packages::findorfail($package),
        ];

        return view('front.subscriptions.index', $data);
    }

    public function blogDetails($id)
    {
        $blog = Blog::findorfail($id);

        return view('front.blog.index', compact('blog'));
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
        $data = Course::where('category_id', $id)->first();
        return view('front.services.details', compact('data'));
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
            'vehicle1' => 'required',
            'Message' => 'nullable|min:2',
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


            'vehicle1.required' => __('index.vehicle1required'),
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
            'type_company' => $request->country,
            'Message' => $request->Message,
            'notes' => implode(',', $request['vehicle1']),
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
            'notes' => $request->country,
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

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
        }

        $new = new Contact();
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
