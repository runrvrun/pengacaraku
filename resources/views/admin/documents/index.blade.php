@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Documents</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/document/create') }}" class="btn btn-primary btn-xs" title="Add New Document"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Document Title </th><th> Document Content </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->document_title }}</td><td>{{ $item->document_content }}</td>
                                        <td>
                                            <a href="{{ url('/admin/document/' . $item->id) }}" class="btn btn-success btn-xs" title="View Document"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/document/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Document"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/document', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Document" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Document',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $documents->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection