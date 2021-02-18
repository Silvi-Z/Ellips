@extends('layouts.admin')



@section('title') Contacts @endsection







@section('content')



    <h1>Contacts</h1>

    <div class="card mb-3">

        <div class="card-header">


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Phone</th>

                        <th>Message</th>

                        <th>Date</th>


                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Phone</th>

                        <th>Message</th>

                        <th>Date</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($contacts)

                        @foreach($contacts as $contact)

                            <tr>

                                <td>

                                    {{$contact -> id}}

                                </td>

                                <td>{{ $contact->name }}</td>

                                <td>{{ $contact->phone }}</td>

                                <td>{{ $contact->email }}</td>

                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->updated_at }}</td>



                                

                            </tr>

                        @endforeach

                    @endif





                    </tbody>







                </table>

            </div>

        </div>
        

    </div>

@endsection






