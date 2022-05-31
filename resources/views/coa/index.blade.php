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
                        <a href="{{ route('coa.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No Akun
                            </th>
                            <th>
                                Nama Akun
                            </th>
                            <th>
                                NIP - Nama
                            </th>
                            <th>
                                Nominal Anggaran
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $item)
                            <tr>
                                <td>
                                    {{ $item->noakun }}
                                </td>
                                <td>
                                    {{ $item->nama_akun }}
                                </td>
                                <td>
                                    {{ $item->user->nip }} - {{$item->user->nama}}
                                </td>
                                <td>
                                    {{ $item->nominal_anggaran }}
                                </td>
                                <td class="d-flex align-items-center">
                                    <div>
                                        <a href="{{ route('coa.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('coa.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                        @if ($item->status == 'proses' && Auth::user()->jabatan != 'wd2')
                                        <div>
                                            <form action="{{ route('coa.validasi', $item->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="status" value="disetujui">
                                                <button class="btn btn-success ml-2">Terima</button>
                                            </form>
                                        </div>
                                        <div>
                                            <form action="{{ route('pengajuan.validasi', $item->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="status" value="ditolak">
                                                <button class="btn btn-danger ml-2">Tolak</button>
                                            </form>
                                        </div>
                                            @else
                                            <div></div>
                                        @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>
                                    Belum Ada Data
                                </th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection