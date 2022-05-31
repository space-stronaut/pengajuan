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
                                    @if ($item->status != 'selesai' && Auth::user()->jabatan != 'ppa')
                                    <div>
                                        <a href="{{ route('pengajuan.edit', $item->id) }}" class="btn btn-success ml-2">Edit</a>
                                    </div>
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
                                        <button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target="#exampleModal-{{$item->id}}">
                                            Terima
                                          </button>

                                          <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('pengajuan.validasi', $item->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="status" value="diterima">
                                                        <input type="file" name="ttd" class="form-control" id="">
                                                        <button class="btn btn-success ml-2">Terima</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                            
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
                                            <div></div>
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