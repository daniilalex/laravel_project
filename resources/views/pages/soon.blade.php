<h1>The page is under construction</h1>
<h4>Get pre-numeric</h4>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

{{ session('message') }}

<form action="{{ route('subscribe') }}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="submit" value="Get subscribe">
</form>

