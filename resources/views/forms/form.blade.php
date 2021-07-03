<form action="{{ route('submitForm') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button>Send</button>
</form>
