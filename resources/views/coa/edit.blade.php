@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        COA
                    </div>
                    <div>
                        <a href="{{ route('coa.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
               <form action="{{ route('coa.update', $data->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <label for="">No Akun</label>
                        <input type="number" name="noakun" class="form-control" value="{{ $data->noakun }}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Akun</label>
                        <input type="text" name="nama_akun" class="form-control" value="{{ $data->nama_akun }}">
                    </div>
                    <div class="form-group">
                        <label for="">Nominal Anggaran</label>
                        <input type="number" name="nominal_anggaran" class="form-control" value="{{ $data->nominal_anggaran }}">
                    </div>
                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection