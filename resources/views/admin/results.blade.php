@include('admin.head')
@include('admin.sidebar')
<br>
<br>

<br>

<br>

<br>
<br>
<br>
<br>
<br>
<br>

    <h1>Search Results</h1>

    @if($results->count() > 0)
        <ul>
            @foreach($results as $result)
                <li>{{ $result->room }}</li> {{-- Display the relevant fields you want to show --}}
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif
    @include('admin.footer')
