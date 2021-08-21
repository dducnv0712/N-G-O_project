@extends('layout')
@section('main')

    <section class="ftco-section bg-light">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <x-jet-validation-errors class="mb-4 text-danger" />

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-transparent border-0"><h2 class="">{{__('Login')}}</h2></div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{__('Email address')}}</label>
                                    <input type="email" class="form-control"  aria-describedby="emailHelp" id="email" name="email" required >
                                </div>
                                <div class="form-group">
                                    <label for="password">{{__('Password')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">{{__('Remember me')}}</label>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-primary btn-block">
                                                {{__('Login with Facebook')}}
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-primary btn-block">
                                                {{__('Login with Google')}}
                                            </a>
                                        </div>

                                    </div>


                                </div>

                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ps-3 me-3 pe-3">{{__('login')}}</button>
                                @if (Route::has('password.request'))
                                        <a class="underline text-sm text-center d-flex align-items-end text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-transparent border-0"><h2 class="">{{__('Register')}}</h2></div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{__('Full Name')}}</label>
                                    <input type="text" class="form-control"  aria-describedby="emailHelp" id="email" name="name" required autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">{{__('Email address')}}</label>
                                    <input type="email" class="form-control"  aria-describedby="emailHelp" id="email" name="email" required >
                                </div>
                                <div class="form-group">
                                    <label for="password">{{__('Password')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{__('Password onfirmation')}}</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation" required autocomplete="current-password">
                                </div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <label for="terms">
                                            <div class="flex items-center">
                                                <input type="checkbox" name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary">{{__('register')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section>

    <section class="ftco-section-3 img" style="background-image: url('{{url('dist/user/images/bg_3.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url('{{url('dist/user/images/bg_4.jpg')}}')"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">{{translateText('Join Our Mailing List')}}</h3>
                    <form class="volunter-form">
                        @csrf
                        <p class="text-white">{{translateText('Join and receive updates on charity news by entering the information below.')}}</p>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control nameSub" placeholder="{{translateText('Your Name')}}">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control emailSub" placeholder="{{translateText('Your Email')}}">
                        </div>

                        <div class="form-group">
                            <button type="button" id="send-mail" class="btn btn-white">{{translateText('Subscribe')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
