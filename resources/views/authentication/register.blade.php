@include('components.header')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="register-page">
    <form action="{{ route('register') }}" method="POST" class="register-form">
        @csrf
        <h2>Register</h2>

        {{-- Name --}}
        <label for="name">Full Name</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            placeholder="Enter your full name" 
            required
        >
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror

        {{-- Email --}}
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            value="{{ old('email') }}" 
            placeholder="Enter your email" 
            required
        >
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror

        {{-- Password --}}
        <label for="password">Password</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Enter your password" 
            required
        >
        @error('password')
            <span class="error">{{ $message }}</span>
        @enderror

        {{-- Confirm Password --}}
        <label for="password_confirmation">Confirm Password</label>
        <input 
            type="password" 
            id="password_confirmation" 
            name="password_confirmation" 
            placeholder="Confirm your password" 
            required
        >

        {{-- Submit --}}
        <button type="submit" class="register-btn">Register</button>

        <div class="register-links">
            <p>Already have an account? 
                <a href="{{ route('login.form') }}">Login here</a>
            </p>
        </div>
    </form>
</div>

@include('components.footer')
