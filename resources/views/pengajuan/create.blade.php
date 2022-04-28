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
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
               <form action="{{ route('pengajuan.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="tanggal_pengajuan" value="{{ now() }}">
                    <input type="hidden" name="status" value="proses">
                    <div class="form-group">
                        <label for="">Prodi</label>
                        <input type="text" name="prodi" class="form-control">
                    </div>
                    <div class="form-group inline container1">
                        <h1 class="add_form_field btn btn-primary">Add New Field &nbsp; 
                          <span style="font-size:16px; font-weight:bold;">+ </span>
                        </h1>
                        <div class="form-group row">
                            <input type="text" name="kegiatan[]" class="form-control"/>
                            <input type="number" name="jumlah_pengajuan[]" class="form-control"/>
                            <select name="coa_id[]" id="" class="form-control">
                                <option value="">Choose...</option>
                                @foreach ($coas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_akun }} - {{ $item->nominal_anggaran }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>

                    
                </form>
                {{-- <div class="container1">
                    <h1 class="add_form_field btn btn-primary">Add New Field &nbsp; 
                      <span style="font-size:16px; font-weight:bold;">+ </span>
                    </h1>
                    <div>
                        <input type="text" name="mytext[]" />
                        <input type="number" name="mytext[]" />
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="kegiatan[]" class="form-control"/><input type="number" name="jumlah_pengajuan[]" class="form-control"/><select name="coa_id[]" id="" class="form-control"><option value="">Choose...</option>@foreach ($coas as $item)<option value="{{ $item->id }}">{{ $item->nama_akun }} - {{ $item->nominal_anggaran }}</option>@endforeach</select><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
    </script>
@endsection