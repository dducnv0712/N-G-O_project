<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Non-governmental Organizations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('dist/bootstrap-5/css/bootstrap.css')}}">


</head>
<body>
<div style="height:100vh" class="container-fluid">
    <div class="row">
        <div style="height:100vh" class="col-4 m-auto d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{url('/volunteer-account-save',['id' => $volunteer ->id])}}">
                            @csrf

                            <div>
                                <span class="fw-bold">{{__('Họ và Tên')}}:</span> {{$volunteer->name}}<br>
                                <span class="fw-bold">{{__('Email')}}:</span> {{$volunteer->email}}
                                <p>{{__('Sử dụng email này để đăng nhập')}}</p>
                            </div>

                            <div class="mt-4">
                                <label for="password"  >{{ __('Password') }}</label>
                                <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <label for="password_confirmation" >{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <label for="terms">
                                        <div class="flex items-center form-check">
                                            <input type="checkbox" class="form-check-input" name="terms" id="terms"/>

                                            <div class="ml-2 form-check-label">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            @endif

                            <div class="d-flex align-items-center justify-items-end mt-4">
                                <button type="submit" class="ml-4 btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
 <script src="{{asset('')}}dist/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
