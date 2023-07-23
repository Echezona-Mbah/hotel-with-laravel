@include('admin.head')
@include('admin.sidebar')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<br>
<br>
<br>
<br>
<br>


<form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
<br>

@if(Session::has('success'))
<div class="alert alert-success text-center">
    {{Session::get('success')}}
</div>
@endif


<br>
<h1>Dynamic Table Example</h1><br>
<div id="status-alert-container"></div>

<table>
    <caption>Employee Information</caption>
    <thead>
        <tr>
            <th>user_id</th>
            <th>date in</th>
            <th>date out</th>
            <th>amount</th>
            <th>status</th>

        </tr>
    </thead>

    @foreach ($Booking as $Bookings)
    <tbody>
        <tr>
            {{-- <td>
                @foreach ($Bookings->user as $relatedRecord)
                    {{dd($relatedRecord) }} <br>
                @endforeach
            </td> --}}
            <td> {{$Bookings->user->name}}</td>
            <td> {{$Bookings->date1}}</td>
            <td> {{$Bookings->date2}}</td>
            <td> {{$Bookings->amount}}</td>
            <td><button class="btn btn-warning status-toggle-btn" data-id="{{ $Bookings->id }}" data-url="{{ route('update.status', $Bookings->id) }}">Toggle Status</button></td>
            {{-- <td>
                @foreach ($Bookings->user as $relatedRecord)
                    {{ $relatedRecord->name }} <br>
                @endforeach
            </td> --}}

        </tr>
        <!-- Add more rows as needed -->
    </tbody>
    @endforeach
</table>


<!-- Add this at the bottom of your view or in a separate JS file -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.status-toggle-btn');
        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const recordId = this.getAttribute('data-id');
                const url = this.getAttribute('data-url');

                // Send a POST request to update the status
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for Laravel
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response, update UI, or show a notification
                    console.log(data);
                    // For example, if you want to update the button text based on the new status:
                    const newStatus = data.new_status;
                    this.textContent = newStatus ? 'pending' : 'confirmed';

                    const alertContainer = document.getElementById('status-alert-container');
                    const alertMessage = newStatus ? 'Status pending!' : 'Status confirmed!';
                    const alertHtml = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ${alertMessage}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    `;
                    alertContainer.innerHTML = alertHtml;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>


@include('admin.footer')
