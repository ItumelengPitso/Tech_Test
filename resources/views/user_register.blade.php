@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="container mt-3" style="padding-bottom: 20px">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
                    + Add User
                </button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{'Registered users'}}</div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="userModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Register User</h4>
                </div>

                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">

                            <div class="form-group">
                                <label for="first_name">Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>

                            <div class="form-group">
                                <label for="surname">Surname:</label>
                                <input type="text" class="form-control" id="surname" name="surname">
                            </div>

                            <div class="form-group">
                                <label for="sa_id">SA ID:</label>
                                <input type="text" class="form-control" id="sa_id" name="sa_id">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input type="number" class="form-control" id="mobile" name="mobile">
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"  autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="birth_date">Birth Date:</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date">
                            </div>

                            <div class="form-group">
                                <label for="language">Language:</label>
                                <select id='language' name="language" class="form-control">
                                    <option value="" disabled selected>Select An Option</option>
                                      @foreach($language as $lan)
                                        <option value=" {!! $lan->id !!}">{{ $lan->name }}</option>
                                      @endforeach
                                </select>
                            </div>
                            <label for='interests'>Interests:</label>
                            <div class="form-group">
                                <select class="form-control" id="interSelect"  name="interests[]" style="width: 100%">
                                    <option value="" disabled>Select An Option</option>
                                    @foreach($interest as $rests)
                                        <option value="{!! $rests->id !!}">{{ $rests->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button style="float: left" type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@push('user_scripts')
    <script>
        $(document).ready(function(){
            $('#interSelect').select2({
                multiple: true,
                dropdownParent: $("#userModal"),
            });
        });

    </script>
@endpush

