@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Category Page</h4>
            <hr>
        </div>
        <dev class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Specialist</th>
                        <th>Time slot</th>
                        <th>Room No.</th>
                        <th>degree</th>
                        <th>Institutions</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctor as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>The Doctor will be available at {{ $item->schedule }} for {{ $item->hour }} hour</td>
                            <td>{{ $item->Room }}</td>
                            <td>{{ $item->degree }}</td>
                            <td>{{ $item->institution }}</td>
                            <td>
                                <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </dev>
    </dev>
@endsection
