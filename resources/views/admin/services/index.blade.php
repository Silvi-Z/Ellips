@extends('layouts.admin')



@section('title') Services @endsection







@section('content')



    <h1>Services</h1>

    <div class="card mb-3">

        <div class="card-header">

            <i class="fa fa-table"></i> Services list</div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>Id</th>

                        <th>Title AM</th>

                        <th>Title RU</th>

                        <th>Title EN</th>

                        <th>Created</th>

                        <th>Updated</th>

                        <th>Actions</th>

                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>Id</th>

                        <th>Title AM</th>

                        <th>Title RU</th>

                        <th>Title EN</th>

                        <th>Created</th>

                        <th>Updated</th>

                        <th>Actions</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($services)

                        @foreach($services as $key=>$service)

                            <tr>

                                <td>

                                    {{ ($key+1) }}
                                </td>

                                <td>{{ $service->title_hy }}</td>

                                <td>{{ $service->title_ru }}</td>

                                <td>{{ $service->title_en }}</td>
                                <td>{{ $service->created_at }}</td>
                                <td>{{ $service->updated_at }}</td>



                                <td>

                                    <a class="ml-1 " href="{{ route('admin.services.edit', $service->id) }}" title="Edit service"><button class="text-dark edit-btn btn btn-warning d-inline-block"><i class="fa fa-edit fa-lg"></i></button></a>



                                    {!! Form::open(['method'=>'DELETE', 'action'=>['ServiceController@destroy', $service->id], 'class'=>'delete-form d-inline']) !!}

                                    <button type="submit" title="Delete category" class="ml-1 my-delete-button btn btn-small btn-danger d-inline-block"><i class="fa fa-lg fa-trash-o"></i></button>

                                    {!! Form::close() !!}

                                </td>

                            </tr>

                        @endforeach

                    @endif





                    </tbody>







                </table>

            </div>

        </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    </div>

@endsection





@section('modal')



    <!-- Delete User Modal-->

    <!-- Delete User Modal-->

    <a class="nav-link" data-toggle="modal" data-target="#deleteModal" style="display: none" id="my-modal-button">

        <i class="fa fa-fw fa-power-off"></i>Logout

    </a>



    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="deleteModalLabel">Ready to do this?</h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">Select "OK" below if you are ready to do chosen action.</div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <button id="my-modal-button-delete" class="btn btn-danger">OK</button>

                </div>

            </div>

        </div>

    </div>

    <!-- END Delete User Modal-->





    <!-- END Delete User Confirmation Modal-->







    <script>



        document.addEventListener('DOMContentLoaded', function(){



            const buttons = document.querySelectorAll('.my-delete-button');

            const modal = document.querySelector('#deleteModal')



            const modalButton = document.querySelector('#my-modal-button');

            const modalButtonDelete = document.querySelector('#my-modal-button-delete');



            const count = buttons.length;



            let form;



            for(let i=0; i<count; i++) {





                buttons[i].addEventListener('click', function(e) {

                    e.preventDefault();

                    form = buttons[i].parentElement;

                    console.log(form);

                    modalButton.click();

                });



            }





            modalButtonDelete.addEventListener('click', function(){

                form.submit();

            })









        });



    </script>





@endsection

