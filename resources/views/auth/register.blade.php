@extends('layouts.app')

@section('content')
<div class="bgimage">
<a href="{{ url('/') }}"><img src="../images/android-icon-192x192_1.png"  class="rounded mx-auto d-block" ></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-header font">Create a new account</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                            <div class="col-md-6">
                                <input id="last_name" type="hidden" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="null" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <input id="id_number" type="hidden" class="form-control{{ $errors->has('id_number') ? ' is-invalid' : '' }}" name="id_number" value="0" required>

                                @if ($errors->has('id_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                                @endif
                            </div>                
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile phone') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      {{--   <div class="form-group row">
                            <label for="KindOfCars" class="col-md-4 col-form-label text-md-right">{{ __('Select the kind of your car') }}</label>


                            <div class="col-md-6">
                                <select id="KindOfCars" class="form-control{{ $errors->has('KindOfCars') ? ' is-invalid' : '' }}" name="KindOfCars" value="{{ old('KindOfCars') }}" required autofocus>
                                    <option value="">Choose your car type</option>
                                    <option value="Kia">Kia</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Geely">Geely</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Hummer">Hummer</option>
                                    <option value="Jeep">Jeep</option>
                                    <option value="Audi">Audi</option>
                                    <option value="FAIT">FAIT</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Dodge">Dodge</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Reunalt">Reunalt</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                </select> 

                                @if ($errors->has('KindOfCars'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('KindOfCars') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                 --}}
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" value="null">

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>


                        <div class="col-md-6">
                                <select id="type" type="text" class="form-control" name="type" required>
                                    <option value="3">user</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning"><i class="fa fa-sign-in-alt"></i>
                                    Sign Up
                                </button>

                            </div>
                           
                        </div>
                    </form>
                     <a class="btn btn-link" href="/login">
                                    {{ __('already have an account? Sign in now') }}
                                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
