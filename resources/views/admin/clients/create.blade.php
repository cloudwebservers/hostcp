@extends('admin.layouts.app')


@section('title', 'Create Client')

@push('scripts')
    <script src='{{ asset('/js/statedropdown.js') }}'></script>

    <script>
        let mobileElement = $('.mobile-code');
        $('select[name=country]').change(function() {
            mobileElement.text(`+${$('select[name=country] :selected').data('mobile_code')}`);
        });

        let dialCode = $('select[name=country] :selected').data('mobile_code');
        mobileElement.text(`+${dialCode}`);
    </script>
@endpush

@section('content')

    <div class="content">

        <div class="card card-default">

            <div class="card-header card-header-border-bottom">
                <h2>Create New Client</h2>
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <form method="POST" action="{{ route('admin.clients.store') }}">
                            @csrf

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" tabindex="1"
                                    class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                    value="{{ old('firstname') }}" required autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" tabindex="4"
                                    class="form-control @error('companyname') is-invalid @enderror" name="companyname"
                                    value="{{ old('companyname') }}">
                                @error('companyname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label>Address 1</label>
                                <input type="text" tabindex="7"
                                    class="form-control @error('address1') is-invalid @enderror" name="address1"
                                    value="{{ old('address1') }}">
                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input type="text" tabindex="7"
                                    class="form-control @error('state') is-invalid @enderror" name="state">

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" tabindex="13">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                    </div>

                    <div class="col-sm-6 col-md-4">


                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" tabindex="2"
                                class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                value="{{ old('lastname') }}" required>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" tabindex="5"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Address 2</label>
                            <input type="text" tabindex="8"
                                class="form-control @error('address2') is-invalid @enderror" name="address2"
                                value="{{ old('address2') }}">
                            @error('address2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <select id="country" name="country" class="form-control" tabindex="11">
                                @foreach ($countries as $key => $country)
                                    <option data-mobile_code="{{ $country->dial_code }}" value="{{ $key }}"
                                        @if ($key == 'IN') selected="selected" @endif>
                                        {{ __($country->country) }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Postcode</label>
                            <input type="text" tabindex="12"
                                class="form-control @error('postcode') is-invalid @enderror" name="postcode"
                                value="{{ old('postcode') }}">
                            @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" tabindex="3" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label>Mobile Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mobile-code"></span>
                                </div>
                                <input type="text" tabindex="6"
                                    class="form-control @error('mobilenumber') is-invalid @enderror" name="mobilenumber"
                                    id="mobile" value="{{ old('mobilenumber') }}" required>

                                @error('mobilenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" tabindex="9"
                                class="form-control @error('city') is-invalid @enderror" name="city"
                                value="{{ old('city') }}">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="form-footer pt-4 text-center">
                            <button tabindex="13" class="btn btn-primary" type="submit">Create New Client</button>
                        </div>


                    </div>

                </div>

            </div>
            </form>
        </div>

    </div>


@endsection
