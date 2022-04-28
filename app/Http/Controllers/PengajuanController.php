<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use App\Models\Pengajuan;
use App\Models\PengajuanItem;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pengajuan::all();

        return view('pengajuan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coas = Coa::all();

        return view('pengajuan.create', compact('coas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuan = Pengajuan::create([
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'prodi' => $request->prodi,
            'user_id' => $request->user_id,
            'status' => $request->status
        ]);

        $kegiatans = $request->kegiatan;
        $coa = $request->coa_id;
        $nominal = $request->jumlah_pengajuan;


        for ($i=0; $i < count($kegiatans); $i++) { 
            PengajuanItem::create([
                'nama_kegiatan' => $kegiatans[$i],
                'jumlah_pengajuan' => $nominal[$i],
                'coa_id' => $coa[$i],
                'pengajuan_id' => $pengajuan->id
            ]);
        }

        return redirect()->route('pengajuan.index');
        // dd($request->kegiatan);
        // dd(count($kegiatans));
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
        $pengajuan = Pengajuan::find($id);
        $coas = Coa::all();
        $items = PengajuanItem::where('pengajuan_id', $id)->get();

        return view('pengajuan.edit', compact('pengajuan', 'coas', 'items'));
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
        $pengajuan = Pengajuan::find($id);
        $no = $pengajuan->id;
        
        $pengajuan->update([
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'prodi' => $request->prodi,
            'user_id' => $request->user_id,
            'status' => $request->status
        ]);

        $kegiatans = $request->kegiatan;
        $coa = $request->coa_id;
        $nominal = $request->jumlah_pengajuan;
        $ids = $request->id;

        for ($i=0; $i < count($ids); $i++) { 
            PengajuanItem::find($ids[$i])->update([
                'nama_kegiatan' => $kegiatans[$i],
                'jumlah_pengajuan' => $nominal[$i],
                'coa_id' => $coa[$i],
                'pengajuan_id' => $no
            ]);
            // $ids[$i];
        }

        // dd($ids);



        return redirect()->route('pengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengajuan::find($id)->delete();

        return redirect()->back();
    }

    public function validasi(Request $request, $id)
    {
        Pengajuan::find($id)->update([
            'status' => $request->status
        ]);

        return redirect()->back();
    }
}
