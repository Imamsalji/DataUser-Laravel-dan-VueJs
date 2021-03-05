<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function index()
    {
        $profiles = profile::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $profiles
        ], 200);
    }

    public function dashboard()
    {
        $jumlah = profile::all()->count();
        return response($jumlah, 200);
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'namadepan'     => 'required',
            'namabelakang'   => 'required',
            'jk'   => 'required',
            'email'   => 'required',
            'ttl'   => 'required',
        ],
            [
                'namadepan.required' => 'Masukkan Title Post !',
                'namabelakang.required' => 'Masukkan Content Post !',
                'jk.required' => 'Masukkan Content Post !',
                'email.required' => 'Masukkan Content Post !',
                'ttl.required' => 'Masukkan Content Post !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $profiles = profile::create([
                'namadepan'     => $request->input('namadepan'),
                'namabelakang'   => $request->input('namabelakang'),
                'jk'   => $request->input('jk'),
                'email'   => $request->input('email'),
                'ttl'   => $request->input('ttl'),
            ]);


            if ($profiles) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $profiles = profile::whereId($id)->first();

        if ($profiles) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Post!',
                'data'    => $profiles
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'namadepan'     => 'required',
            'namabelakang'   => 'required',
            'jk'   => 'required',
            'email'   => 'required',
            'ttl'   => 'required',
        ],
            [
                'namadepan.required' => 'Masukkan namadepan Post !',
                'namabelakang.required' => 'Masukkan namabelakang Post !',
                'jk.required' => 'Masukkan namabelakang Post !',
                'email.required' => 'Masukkan namabelakang Post !',
                'ttl.required' => 'Masukkan namabelakang Post !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $profiles = profile::whereId($request->input('id'))->update([
                'namadepan'     => $request->input('namadepan'),
                'namabelakang'   => $request->input('namabelakang'),
                'jk'   => $request->input('jk'),
                'email'   => $request->input('email'),
                'ttl'   => $request->input('ttl'),
            ]);


            if ($profiles) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Diupdate!',
                ], 500);
            }

        }

    }

    public function destroy($id)
    {
        $profiles = profile::findOrFail($id);
        $profiles->delete();

        if ($profiles) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 500);
        }

    }
}
