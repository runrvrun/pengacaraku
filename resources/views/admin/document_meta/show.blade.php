@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Document_metum {{ $document_metum->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/document_meta/' . $document_metum->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Document_metum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/document_meta', $document_metum->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Document_metum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $document_metum->id }}</td>
                                    </tr>
                                    <tr><th> Document Id </th><td> {{ $document_metum->document_id }} </td></tr><tr><th> Meta Name </th><td> {{ $document_metum->meta_name }} </td></tr><tr><th> Meta Value </th><td> {{ $document_metum->meta_value }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection