<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Request as myRequest;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Subject $model)
    {
        return view('welcome', ['subjects' => $model->orderBy('name')->paginate(15)]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin(Subject $model)
    {
        return view('subjects.index', ['subjects' => $model->orderBy('name')->paginate(15)]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create', ['subjects' => Subject::orderBy('name')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSubject = new Subject;
        $newSubject->name = $request->name;
        $newSubject->price = $request->price;
        $newSubject->save();

        return redirect()->route('subjects.admin')->withStatus([__('success'), __('Assunto inserido com sucesso.')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('subjects.edit', ['subject' => Subject::where('id', $id)->first()]);
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
        $mySubject = Subject::findOrFail($id);
        $mySubject->name = $request->name;
        $mySubject->price = $request->price;
        $mySubject->save();

        return redirect()->route('subjects.admin')->withStatus([__('success'), __('Assunto editado com sucesso.')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (myRequest::where('subject_id', $id)->exists()) {
            return redirect()->route('subjects.admin')->withStatus([__('warning'), __('Existem protocolos com esse assunto!')]);
        } else {
            $mySubject = Subject::findOrFail($id);
            $mySubject->delete();
            return redirect()->route('subjects.admin')->withStatus([__('success'), __('Assunto excluído com sucesso.')]);
        }        
    }
}
