<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\RequestCleaner;
use App\Faq;
use App\Post;

class MainController extends Controller
{

    use RequestCleaner;

    private $pageName = 'main';

    private $requestFaqFields = [
        'active',
        'question',
        'answer'
    ];

    public function show(){
        return view('dashboard.main.index', [
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }

    public function features(){
        return view('dashboard.main.features');
    }

    public function featuresEdit()
    {
        return view('dashboard.main.features_edit');
    }

    public function faq(){
        return view('dashboard.main.faq', [
            'faq_list' => Faq::all()
        ]);
    }

    public function faqCreate(){
        return view('dashboard.main.faq_add');
    }

    public function faqEdit($id){
        return view('dashboard.main.faq_edit')->with(['faq'=>Faq::whereId($id)->first()]);
    }

    public function createFaq(Request $request){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFaqFields);
        $status = Faq::add($cleanRequest);
        if($status) return redirect()->route('main.faq')->with(['status'=>'Create success!']);
        else abort(404);
    }

    public function updateFaq(Request $request, $id){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFaqFields);
        $status = Faq::edit($cleanRequest, $id);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort(404);
    }

    public function deleteFaq($id){
        $status = Faq::deleteHelp($id);
        if($status) return redirect()->back()->with(['status'=>'Delete success!']);
        else abort(404);
    }
}
