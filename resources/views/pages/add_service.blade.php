<h1>Create Service</h1>

{{ session('message') }}

<form action="{{ route('services.store') }}" method="post">
    @csrf
    @method('POST')
    <label for="title">Title</label><br>
    <input type="text" name="title"><br>
    <label for="description">Description</label><br>
    <input type="text" name="description"><br>
    <label for="price">Price</label><br>
    <input type="text" name="price"><br>
    <label for="duration">Duration</label><br>
    <input type="text" name="duration"><br><br>
    <input type="submit" value="Add Service">
</form>

