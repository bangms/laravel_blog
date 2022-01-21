<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans");
        .form-structor {
            background-color: #222;
            border-radius: 15px;
            height: 550px;
            width: 350px;
            position: relative;
            overflow: hidden;
            }
            .form-structor::after {
            content: "";
            opacity: 0.8;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: 500px;
            background-image: url("https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bf884ad570b50659c5fa2dc2cfb20ecf&auto=format&fit=crop&w=1000&q=100");
            }
            .form-structor .signup {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup.slide-up {
            top: 5%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
            }
            .form-structor .signup.slide-up .form-title {
            font-size: 1em;
            cursor: pointer;
            }
            .form-structor .signup.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup .form-title {
            color: #fff;
            font-size: 1.7em;
            text-align: center;
            }
            .form-structor .signup .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup .form-holder {
            border-radius: 15px;
            background-color: #fff;
            overflow: hidden;
            margin-top: 30px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #eee;
            width: 100%;
            font-size: 12px;
            }
            .form-structor .signup .form-holder .input:last-child {
            border-bottom: 0;
            }
            .form-structor .signup .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
            }
            .form-structor .signup .submit-btn {
            background-color: rgba(0, 0, 0, 0.4);
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .signup .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
            }
            .form-structor .login {
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login::before {
            content: "";
            position: absolute;
            left: 50%;
            top: -20px;
            -webkit-transform: translate(-50%, 0);
            background-color: #fff;
            width: 200%;
            height: 250px;
            border-radius: 50%;
            z-index: 4;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login .center {
            position: absolute;
            top: calc(50% - 10%);
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login .center .form-title {
            color: #000;
            font-size: 1.7em;
            text-align: center;
            }
            .form-structor .login .center .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login .center .form-holder {
            border-radius: 15px;
            background-color: #fff;
            border: 1px solid #eee;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login .center .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #eee;
            width: 100%;
            font-size: 12px;
            }
            .form-structor .login .center .form-holder .input:last-child {
            border-bottom: 0;
            }
            .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
            }
            .form-structor .login .center .submit-btn {
            background-color: #6B92A4;
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login .center .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
            }
            .form-structor .login.slide-up {
            top: 90%;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login.slide-up .center {
            top: 10%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login.slide-up .form-title {
            font-size: 1em;
            margin: 0;
            padding: 0;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
            }
            .form-structor .login.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            }
            #log, #reg {
                display:inline-block;
            }
            #container {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -250px;
                margin-left: -175px;
            }
</style>
</head>
<body>
    <div id="container">
        <div class="form-structor">
            <div class="signup">
                <div class="center">
                  {{-- <a class="form-title" id="login" href="{{ '/login' }}"><span>or</span>Sign up</a> --}}
                  <form method="POST" class="form-title" id="signup" action="{{ route('register') }}">
                    <div id="reg">
                        <span>or</span>Sign up
                    </div>
                    @csrf 
                    {{-- Remember, any HTML forms pointing to POST, PUT, PATCH, or DELETE routes 
                      that are defined in the web routes file should include a CSRF token field. 
                      Otherwise, the request will be rejected. --}}
                    <div class="form-holder">
                        <input type="text" class="input" name="login_id" placeholder="Id" />
                        <input type="text" class="input" name="name" placeholder="Name" />
                        <input type="password" class="input" name="password" placeholder="Password" />
                        <input type="text" class="input" name="email" placeholder="Email" />
                        <input type="text" class="input" name="phone" placeholder="Phone" />
                    </div>
                    <button class="submit-btn">Sign up</button>
                  </form>
                </div>
            </div>
            <div class="login">
                <div class="center">
                <form method="POST" class="form-title" id="login" action="{{ route('login') }}">
                    <div id="log">
                        <span>or</span>Log in
                    </div>
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
    </div>
</body>
</html>
<script type="text/javascript">
    console.clear();
    console.log(window.location.pathname);

    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    let pathname = window.location.pathname;

    if(pathname == '/register') {
        let parent = signupBtn.parentNode.parentNode;
 
        loginBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')

    } else if (pathname == '/login') {
        let parent = loginBtn.parentNode;

        signupBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')

    }

    document.getElementById('log').addEventListener('click', e => {
        window.location = 'http://blog.test/login';
    });

    document.getElementById('reg').addEventListener('click', e => {
        window.location = 'http://blog.test/register';
    });
</script>