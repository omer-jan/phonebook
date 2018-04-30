<?php
 
namespace App\Http\Controllers;

use App\phonebook;
use App\Http\Requests\PhonebookRequest;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('phonebook'); 
        //getdate();
    }
     public function getdata()
    {
       return phonebook::orderBy('name','ASC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhonebookRequest $request)
    {
         $ph=new Phonebook;
         $ph->name=$request->name;
         $ph->phone=$request->phone;
         $ph->email=$request->email;
         $ph->save();
         return $ph;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(PhonebookRequest $request )
    {
        $ph=Phonebook::find($request->id);
         $ph->name=$request->name;
         $ph->phone=$request->phone;
         $ph->email=$request->email;
         $ph->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(phonebook $phonebook)
    {
        phonebook::where('id',$phonebook->id)->delete();
        
    }
}
