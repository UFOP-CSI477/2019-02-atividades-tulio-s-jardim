<?php

namespace App\Http\Controllers;

use App\Request as MyRequest;
use App\Subject;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Subject::join('requests','requests.subject_id','=','subjects.id')
                                ->where('user_id',auth()->user()->id)
                                ->orderBy('date');
        $subjects = Subject::orderBy('name'); 

        return view('protocols.index', ['requests' => $requests->paginate(15), 'subjects' => $subjects->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('protocols.create', ['subjects' => Subject::orderBy('name')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProtocol = new MyRequest;
        $newProtocol->user_id = auth()->user()->id;
        $newProtocol->subject_id = $request->subject;
        $newProtocol->date = $request->date;
        $newProtocol->description = $request->description;
        $newProtocol->save();

        return redirect()->route('protocols.index')->withStatus(__('Protocolo inserido com sucesso.'));
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
        return view('protocols.edit', ['request' => MyRequest::where('id', $id)->first(), 'subjects' => Subject::orderBy('name')->get()]);
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
        $myProtocol = myRequest::findOrFail($id);
        $myProtocol->subject_id = $request->subject;
        $myProtocol->date = $request->date;
        $myProtocol->description = $request->description;
        $myProtocol->save();

        return redirect()->route('protocols.index')->withStatus(__('Protocolo editado com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myProtocol = myRequest::findOrFail($id);
        $myProtocol->delete();

        return redirect()->route('protocols.index')->withStatus(__('Protocolo excluído com sucesso.'));
    }
}
