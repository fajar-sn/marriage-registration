<?php

namespace App\Http\Controllers;

use App\RegistrationInfo;
use Illuminate\Http\Request;

class MarriageController extends Controller {
    
    public function index() {
        $brides = \App\Bride::all();
        $bridegrooms = \App\Bridegroom::all();
        $couples = array();
        foreach($bridegrooms as $bridegroom) {
            foreach($brides as $bride) {
                $couples[] = [
                    'bridegroom' => $bridegroom->first_name . " " . $bridegroom->last_name,
                    'bride' => $bride->first_name . " " . $bride->last_name,
                ];
            }
        }
        return view('marriage.index', compact('couples'));
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(RegistrationInfo $registrationInfo) {
        $bridegroom = \App\Bridegroom::where('id', $registrationInfo->bridegroom_id)->get()->toArray();
        $bride = \App\Bride::where('id', $registrationInfo->bride_id)->get()->toArray();
        $bridegroomFather = \App\BridegroomFather::where('id', $registrationInfo->bridegroom_father_id)->get()->toArray();
        $brideFather = \App\BrideFather::where('id', $registrationInfo->bride_father_id)->get()->toArray();
        $bridegroomMother = \App\BridegroomMother::where('id', $registrationInfo->bridegroom_mother_id)->get()->toArray();
        $brideMother = \App\BrideMother::where('id', $registrationInfo->bride_mother_id)->get()->toArray();
        $bridegroomWitness = \App\BridegroomWitness::where('id', $registrationInfo->bridegroom_witness_id)->get()->toArray();
        $brideWitness = \App\BrideWitness::where('id', $registrationInfo->bride_witness_id)->get()->toArray();
        $registrationInfo = $registrationInfo->toArray();
        $marriage = [
            'registrationInfo' => $registrationInfo,
            'bridegroom' => $bridegroom,
            'bride' => $bride,
            'bridegroomFather' => $bridegroomFather,
            'brideFather' => $brideFather,
            'bridegroomMother' => $bridegroomMother,
            'brideMother' => $brideMother,
            'bridegroomWitness' => $bridegroomWitness,
            'brideWitness' => $brideWitness
        ];
        // dump($marriage['registrationInfo']);
        return view('marriage.show', compact('marriage'));
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
