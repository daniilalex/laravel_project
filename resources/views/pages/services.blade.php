<h1>Our Services</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @if($data)
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm">Update </a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<br>
<a href="<? Route::redirect('home', 'welcome')?>">Go back</a>



