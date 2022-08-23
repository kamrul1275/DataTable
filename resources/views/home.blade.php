@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >

<div class="container">
    <div class="row justify-content-center">

       <div class="mt-5">

        <a href="{{ route('user.export') }}" class="btn btn-primary">
            Export Data
        </a>

        <a href="{{ route('user.Add') }}" class="btn btn-info">
           Create User
        </a>
       </div>
        <div class="col-md-8">




            <table class="table " id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>


                </thead>


                @foreach ( $users as $key=> $user )

                   <tr>

                            <td>{{$key+1  }}</td>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->email }}</td>
                            <td>
                            <a href="" class=" btn btn-success">Edit</a>
                            <a href="" class=" btn btn-danger">Delete</a>
                            </td>

                    </tr>

                @endforeach

                <tbody>

                </tbody>
              </table>


        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js "></script>



<script>

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );



</script>



@endsection
