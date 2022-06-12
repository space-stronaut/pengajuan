@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        Pengajuan
                    </div>
                    @if (Auth::user()->jabatan != 'ppa')
                    <div>
                        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">Create</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Tanggal Pengajuan
                            </th>
                            <th>
                                Prodi
                            </th>
                            <th>
                                Pengaju
                            </th>
                            <th>
                                Status
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
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->tanggal_pengajuan }}
                                </td>
                                <td>
                                    {{ $item->prodi }}
                                </td>
                                <td>
                                    {{ $item->user->nama }}
                                </td>
                                <td class="text-uppercase">
                                    
                                    {{ $item->status }}
                                </td>
                                <td class="d-flex align-items-center">
                                    <div>
                                        <a href="{{ route('pengajuan.show', $item->id) }}" class="btn btn-info ml-2">Detail</a>
                                    </div>
                                    <div>
                                        <a href="{{ route('pdf', $item->id) }}" class="btn btn-info ml-2">Cetak</a>
                                    </div>
                                    @if ($item->status != 'selesai' && Auth::user()->jabatan != 'ppa')
                                    {{-- <div>
                                        <a href="{{ route('pengajuan.edit', $item->id) }}" class="btn btn-success ml-2">Edit</a>
                                    </div> --}}
                                    <div>
                                        <form action="{{ route('pengajuan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger ml-2">Delete</button>
                                        </form>
                                    </div>
                                    @endif
                                    <div class="row">
                                        @if ($item->status == 'proses' && Auth::user()->jabatan != 'wd2')
                                        <form action="{{ route('pengajuan.validasi', $item->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="diterima">
                                            <button class="btn btn-success ml-2">Terima</button>
                                        </form>
                                            
                                            <form action="{{ route('pengajuan.validasi', $item->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="status" value="tolak">
                                                <button class="btn btn-danger ml-2">Tolak</button>
                                            </form>
                                        @elseif($item->status == 'diterima' && Auth::user()->jabatan != 'wd2')
                                            <form action="{{ route('pengajuan.validasi', $item->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="status" value="selesai">
                                                <button class="btn btn-success ml-2">Selesai</button>
                                            </form>
                                        @else
                                            <div>
                                                <a href="{{ route('pengajuan.realisasi', $item->id) }}" class="btn btn-info">Realisasi</a>
                                            </div>
                                        @endif
                                    </div>
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
                  
                  <!-- Modal -->
                  
            </div>
        </div>
    </div>
@endsection