<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStart extends Controller
{
    public function start()
    {
        return view('start.welcome');
    }

    public function kontakt()
    {
        return view('start.kontakt');
    }
/* Route::get('/onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('onas', ['zadania' => $zadania]);
}); */
    public function onas()
    {
        $zadania = [
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];
        $taski = [
            'Task 1',
            'Task 2',
            'Task 3'
        ];
        //return view('onas',['zadania' => $zadania]);
        //return view('onas',compact('zadania', 'taski'));
        //return view('onas')->with('zadanka',$zadania)->with('taski',$taski);
        return view('start.onas', compact('taski'))->with('zadanka',$zadania);
    }

    public function kontakt_id($id, $info)
    {

        return view('test.kontakt', compact('id','info'));
    }
}
