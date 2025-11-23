@include('components.header')

<!-- Link the register page CSS -->
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="register-page-wrapper">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2 style="text-align:center; margin-bottom:20px; color:#00bfff;">Register</h2>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <label for="password_confirmation">Retype Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype password" required>

        <input type="submit" value="Register">
    </form>
</div>

@include('components.footer')
