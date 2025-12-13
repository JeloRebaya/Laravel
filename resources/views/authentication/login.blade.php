@include('components.header')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="login-page">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Login</h2>

        {{-- Display validation or login errors --}}
        @if($errors->any())
            <div class="error-message">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {{-- Display success messages --}}
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <input type="submit" value="Login">

        <div class="login-links">
            <p>Doesn't have an account? <a href="{{ route('register.form') }}">Register here</a></p>
        </div>
    </form>
</div>

@include('components.footer')
