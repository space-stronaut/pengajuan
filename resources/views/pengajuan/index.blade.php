@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        Pengajuan
                    </div>
                    <div>
                        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">Create</a>
                    </div>
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
                                <td>
                                    {{ $item->status }}
                                </td>
                                <td class="d-flex align-items-center">
                                    <div>
                                        <a href="{{ route('pengajuan.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('pengajuan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
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
            </div>
        </div>
    </div>
@endsection