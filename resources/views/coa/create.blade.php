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
               <form action="{{ route('coa.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="proses">
                    <div class="form-group">
                        <label for="">No Akun</label>
                        <input type="number" name="noakun" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Akun</label>
                        <input type="text" name="nama_akun" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nominal Anggaran</label>
                        <input type="number" name="nominal_anggaran" class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>

                    
                </form>
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
            $(wrapper).append('<div><input type="text" name="mytext[]"/><input type="number" name="mytext[]" /><a href="#" class="delete">Delete</a></div>'); //add input box
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