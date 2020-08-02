<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        //dd($search);
        //dd($request);

        $query = DB::table('contact_forms');
        
        if($search !== null){
            
            $search_split = mb_convert_kana($search,'s');
 
            $search_split2 = preg_split('/[\s]+/',$search_split,-1,PREG_SPLIT_NO_EMPTY);
 
            foreach($search_split2 as $value)
            {
                $query->where('shop_name','like','%'.$value.'%');
            }
        };

        $query->select('id', 'shop_name', 'category', 'created_at');
        $query->orderBy('created_at', 'asc');
        $contacts = $query->paginate(20);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request)
    {
        $contact = new ContactForm;

        $contact->shop_name = $request->input('shop_name');
        $contact->address = $request->input('address');
        $contact->category = $request->input('category');
        $contact->shop_url = $request->input('shop_url');
        $contact->contact = $request->input('contact');
        
        $contact->save();

        return redirect('contact/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);

        return view('contact.show', compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);

        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = new ContactForm;

        $contact->shop_name = $request->input('shop_name');
        $contact->address = $request->input('address');
        $contact->category = $request->input('category');
        $contact->shop_url = $request->input('shop_url');
        $contact->contact = $request->input('contact');
        
        $contact->save();

        return redirect('contact/index');
    }

    /**s
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return redirect('contact/index');
    }
}
