<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StorePerusahaanRequest;
// use App\Http\Requests\UpdatePerusahaanRequest;
use App\Models\Perusahaan;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Gate;
// use Symfony\Component\HttpFoundation\Response;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){
        $perusahaan= Perusahaan::all();
        return view('perusahaan.index', ['perusahaan' => $perusahaan]);
     }
    // public function index()
    // {
        
    //     abort_if(Gate::denies('perusahaan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $perusahaan = Perusahaan::all();

    //     return view('perusahaan.index', compact('perusahaan'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        $proyek = Proyek::all();
        return view('perusahaan.create')
        ->with([
            'proyek' => $proyek,
        ]);
    }
    // public function create()
    // {
    //     abort_if(Gate::denies('perusahaan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     return view('perusahaan.create');
    // }
    public function store(Request $request){
        DB::table('perusahaan')->insert(
            ['nama'=>$request->nama,
            'alamat'=>$request->alamat, 
            'detail'=>$request->detail,
            'history'=>$request->history,
         ]);
         return redirect('perusahaan/edit');
    }

    public function edit($id)
    {
        try {
            $perusahaan = Perusahaan::findOrFail(decrypt($id));
            return view("perusahaan.edit")->with(['perusahaan' => $perusahaan]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'detail' => 'required',
            'history' => 'required',
        ]);
        
        $perusahaan = Perusahaan::findOrFail($id)->update($request->except('_token'));
        if($perusahaan){
            return redirect()->back()->with("success", "data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }
    public function show()
    {
        return view('perusahaan.data');
    }
    // public function store(StorePerusahaanRequest $request)
    // {
    //     Perusahaan::create($request->validated());

    //     return redirect()->route('perusahaan.index');
    // }

    // public function show(Perusahaan $perusahaan)
    // {
    //     abort_if(Gate::denies('perusahaan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     return view('perusahaan.show', compact('perusahaan'));
    // }

    // public function edit(Perusahaan $perusahaan)
    // {
    //     abort_if(Gate::denies('perusahaan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     return view('perusahaan.edit', compact('perusahaan'));
    // }

    // public function update(UpdatePerusahaanRequest $request, Perusahaan $perusahaan)
    // {
    //     $perusahaan->update($request->validated());

    //     return redirect()->route('perusahaan.index');
    // }

    // public function destroy(Perusahaan $perusahaan)
    // {
    //     abort_if(Gate::denies('perusahaan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    //     $perusahaan->delete();

    //     return redirect()->route('perusahaan.index');
    // }
}