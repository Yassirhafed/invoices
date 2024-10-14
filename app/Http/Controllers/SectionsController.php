<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Sections;
use Illuminate\Http\Request;



class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = sections::all();
        return view('sections.sections',compact('sections'));

    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $validatedData = $request->validate([
                'section_name' => 'required|unique:sections|max:255',
            ],[
                'section_name.required' => 'يرجي ادخال اسم القسم',
                'section_name.unique' => 'اسم القسم مسجل مسبقا',
            ]);
        
        $b_exists = sections::where('section_name', '=', $input['section_name'])->exists();
        
        if ($b_exists) {
                session()->flash('Error', 'خطأ الإسم مسجل مسبقا');
                return redirect('/sections');
        } 
        else {
                sections::create([
                    'section_name' => $request->section_name,
                    'description' => $request->description,
                    'Created_by' => Auth::user()->name,
                ]);
                session()->flash('Add', 'تم اضافة القسم بنجاح');
                return redirect('/sections');
        }
    }

}
    


    /**
     * Display the specified resource.
     *
     * @param  \App\sections  $sections
     * @return \Illuminate\Http\Response
     */
  
     {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sections  $sections
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
  