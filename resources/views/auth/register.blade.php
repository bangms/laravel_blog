@extends('layouts.app')
@extends('layouts.menu')
{{-- @section('content')
    <div class="form-structor">
        <div class="signup">
          <form method="POST" class="form-title" id="signup" action="{{ route('register') }}"><span>or</span>Sign up
            @csrf 
            {{-- Remember, any HTML forms pointing to POST, PUT, PATCH, or DELETE routes 
              that are defined in the web routes file should include a CSRF token field. 
              Otherwise, the request will be rejected. --}}
            {{-- <div class="form-holder">
                <input type="text" class="input" name="login_id" placeholder="Id" />
                <input type="text" class="input" name="name" placeholder="Name" />
                <input type="password" class="input" name="password" placeholder="Password" />
                <input type="text" class="input" name="email" placeholder="Email" />
                <input type="text" class="input" name="phone" placeholder="Phone" />
            </div>
            <button class="submit-btn">Sign up</button>
          </form>
        </div>
        <div class="login slide-up">
            <div class="center">
              <a class="form-title" id="login" href="{{ '/login' }}"><span>or</span>Log in</a>
            </div>
        </div>
    </div>
@endsection  --}}


