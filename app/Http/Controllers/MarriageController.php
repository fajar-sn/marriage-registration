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
        return view('marriage.show', compact('registrationInfo'));
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
