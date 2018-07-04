<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\RequestCleaner;
use App\Help;
use App\Post;

class HelpController extends Controller
{

    use RequestCleaner;

    private $pageName = 'help';

    private $requestFields = [
        'active',
        'question',
        'answer'
    ];

    public function index(){
        return view('dashboard.help.index', [
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }

    public function list(){
        return view('dashboard.help.list', [
            'help_list' => Help::all()
        ]);
    }

    public function create(){
        return view('dashboard.help.create');
    }

    public function update($id){
        return view('dashboard.help.edit')->with(['help'=>Help::whereId($id)->first()]);
    }

    public function createItem(Request $request){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Help::add($cleanRequest);
        if($status) return redirect()->route('help.list')->with(['status'=>'Create success!']);
        else abort(404);
    }

    public function updateItem(Request $request, $id){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Help::edit($cleanRequest, $id);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort(404);
    }

    public function deleteItem($id){
        $status = Help::deleteHelp($id);
        if($status) return redirect()->back()->with(['status'=>'Delete success!']);
        else abort(404);
    }
}
