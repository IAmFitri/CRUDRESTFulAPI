<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index() {
        
        return Data::all();

        // $schedule = DB::select('SELECT * FROM data WHERE id=1');
        // return \Response::json($schedule);
    }

    public function store(Request $r) {

        $d = new Data();
        $d->nama = $r->nama;
        $d->no_telepon = $r->no_telepon;
        $d->created_at = date("Y-m-d H:i:s");
        $d->updated_at = date("Y-m-d H:i:s");
        $d->save();

        return response()->json(['pesan' => 'Data Berhasil Masuk', 'status' => true]);
    }

    public function update(Request $r, $id) {

        $d = Data::find($id);
        $d->nama = $r->nama;
        $d->no_telepon = $r->no_telepon;
        $d->updated_at = date("Y-m-d H:i:s");
        $d->save();

        return response()->json(['pesan' => 'Data Berhasil di-Update', 'status' => true]);
    }

    public function delete($id) {

        $d = Data::find($id);
        $d->delete();

        return response()->json(['pesan' => 'Data Berhasil di-Delete', 'status' => true]);
    }

    public function getDataById($id) {

        $d = Data::find($id);
        return $d;
    }

    public function query($id) {

    }

}
