@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div style="padding-bottom: 20px">
                <a class="btn btn-primary" href="{{ route('Dashboard.index') }}" >Back</a>
            </div>

            {{--Message--}}
            @if(session('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="width: 50%">
                        <strong>Oops!</strong> {{session('error')}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: right">
                           <span>&times;</span>
                        </button>
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{'Update user'}}</div>
                    <div class="card-body">
                        <form action="{{ route('update',$findUser->id) }}" method="post" >
                        @csrf
                                <div class="container">
                                    <div class="form-group">
                                        <label for="first_name">Name:</label>
                                        <input value="{{$findUser->first_name}}" type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Surname:</label>
                                        <input value="{{$findUser->surname}}" type="text" class="form-control" id="surname" name="surname">
                                    </div>
                                    <div class="form-group">
                                        <label for="sa_id">SA ID:</label>
                                        <input value="{{$findUser->sa_id}}" type="text" class="form-control" id="sa_id" name="sa_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number:</label>
                                        <input value="{{$findUser->mobile}}" type="number" class="form-control" id="mobile" name="mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{$findUser->email}}"  autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_date">Birth Date:</label>
                                        <input value="{{ \Carbon\Carbon::parse($findUser->birth_date)->format('Y-m-d') }}"
                                               type="date" class="form-control" id="birth_date" name="birth_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="language">Language:</label>
                                        <select id='language' name="language" class="form-control">
                                            @foreach($language as $lan)
                                                @if($findUser->languages == $lan->id)
                                                    <option value="{!! $lan->id !!}" selected>{{ $lan->name }}</option>
                                                @endif
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
                            <div style="padding-top: 20px">
                                <button style="float: right" type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('user_scripts')
    <script>
        $(document).ready(function(){
            $('#interSelect').select2({
                multiple: true,
            });
        });
    </script>
@endpush

