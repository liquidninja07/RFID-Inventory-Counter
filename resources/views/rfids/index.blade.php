@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($rfids))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>RFIDs List </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('rfids.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table sortable">
                    <!-- Table Headings -->
                    <thead>
                        <th>UID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th width="15%">Created</th>
                        <th class="text-center" width="20%">Action</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach($rfids as $rfid)
                        <tr>
                            <td class="table-text">
                                <div>{{$rfid->uid}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$rfid->make}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$rfid->model}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$rfid->created}}</div>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('rfids.details', $rfid->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('rfids.edit', $rfid->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('rfids.delete', $rfid->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection
