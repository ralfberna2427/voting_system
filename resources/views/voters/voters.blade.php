@extends('master')
@section('content')
<div class="container">
    <h1 style="text-align: center;">REGISTERED VOTERS</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th colspan="2" style="text-align: center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($votersList as $votersList)
            <tr>
                <td>{{ $votersList->first_name }}</td>
                <td>{{ $votersList->middle_name }}</td>
                <td>{{ $votersList->last_name }}</td>
                <td style="text-align: center; "><button class="btn btn-warning"><span class="fa fa-edit" data-bs-toggle="tooltip" title="EDIT ITEM"></span></button></td>
                <td style="text-align: center; "><button class="btn btn-danger"><span class="fa fa-trash" data-bs-toggle="tooltip" title="DELETE ITEM"></span></button></td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
</div>


@endsection