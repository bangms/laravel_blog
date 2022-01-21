@extends('layouts.app')
@extends('layouts.menu')
{{-- @section('content')
<div class="form-structor">
    <div class="signup slide-up">
        <div class="center">
          <a class="form-title" id="login" href="{{ '/login' }}"><span>or</span>Sign up</a>
        </div>
    </div>
    <div class="login slide-up">
        <div class="center">
        <form method="POST" class="form-title" id="login" action="{{ route('login') }}"><span>or</span>Log in
            @csrf
            <div class="form-holder">
                <input type="text" class="input" name="login_id" placeholder="Id" />
                <input type="password" class="input" name="password" placeholder="Password" />
            </div>
            <button class="submit-btn">Log in</button>
        </form>
        </div>
    </div>
</div>
@endsection --}}
