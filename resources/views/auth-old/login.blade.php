<form action="{{ route('login') }}" method="POST">
@csrf
<input type="text" name="email" placeholder="Email" />
<input type="password" name="password" placeholder="Password" autocomplete="new-password" />
<button>Login</button>
</form>
