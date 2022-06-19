<?php

namespace Modules\Chat\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = array(
            'list'=>DB::table('ChatIsi')->select('NamaPenerima')->distinct()->get()
        );
        return view('chat::index', $data);
    }

    public function post($NamaPenerima)
    {
        $data = array(
            'users'=>DB::table('ChatIsi')->where('NamaPenerima', '=', $NamaPenerima)->get(),
            'users2'=>DB::table('ChatIsi')->where('NamaPenerima', '=', $NamaPenerima)->select('NamaPenerima')->distinct()->get()
        );
        return view('chat::post', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('chat::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function isi_pesan(Request $request)
    {
        $request->validate([
            'NamaPenerima'=>'required',
            'IsiPsn'=>'required'
        ]);

        $query = DB::table('ChatIsi')->insert([
            'NamaPenerima'=>$request->input('NamaPenerima'),
            'IsiPsn'=>$request->input('IsiPsn')
        ]);
        
        return redirect('/chat');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('chat::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('chat::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
