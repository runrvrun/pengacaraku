@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Document_meta</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/document_meta/create') }}" class="btn btn-primary btn-xs" title="Add New Document_metum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Document Id </th><th> Meta Name </th><th> Meta Value </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($document_meta as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->document_id }}</td><td>{{ $item->meta_name }}</td><td>{{ $item->meta_value }}</td>
                                        <td>
                                            <a href="{{ url('/admin/document_meta/' . $item->id) }}" class="btn btn-success btn-xs" title="View Document_metum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/document_meta/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Document_metum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/document_meta', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Document_metum" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Document_metum',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $document_meta->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection