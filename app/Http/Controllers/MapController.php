<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMapMarker;
use App\Http\Requests\UpdateMapMarker;
use App\Http\Traits\RequestCleaner;
use App\Marker;

class MapController extends Controller
{

    use RequestCleaner;

    private $requestFields = [
        'latitude',
        'longitude',
        'description',
    ];

    public static function getMarkers(){
        $markers = Marker::select('id', 'latitude', 'longitude', 'description')
            ->get()
            ->toArray();
        return response()
            ->json($markers);
    }

    public function show(){
        return view('dashboard.map.show');
    }

    public function edit($id){
        return view('dashboard.map.edit')->with(['marker'=>Marker::whereId($id)->first()]);
    }

    public function create(){
        return view('dashboard.map.create');
    }

    public function listMarkers(){
        return view('dashboard.map.list', [
            "markers" => Marker::all()
        ]);
    }

    public function createMarker(CreateMapMarker $request){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Marker::add($cleanRequest);
        if($status) return redirect()->back()->with(['status'=>'Create success!']);
        else abort(404);
    }

    public function editMarker(UpdateMapMarker $request, $id){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Marker::edit($cleanRequest, $id);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort(404);
    }

    public function deleteMarker($id){
        $status = Marker::deleteMarker($id);
        if($status) return redirect()->back()->with(['status'=>'Delete success!']);
        else abort(404);
    }

}
