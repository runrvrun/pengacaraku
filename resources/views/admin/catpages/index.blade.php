@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Catpages</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/catpages/create') }}" class="btn btn-primary btn-xs" title="Add New Catpage"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Catpage Author </th><th> Catpage Title </th><th> Catpage Subtitle </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($catpages as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->catpage_author }}</td><td>{{ $item->catpage_title }}</td><td>{{ $item->catpage_subtitle }}</td>
                                        <td>
                                            <a href="{{ url('/admin/catpages/' . $item->id) }}" class="btn btn-success btn-xs" title="View Catpage"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/catpages/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Catpage"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/catpages', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Catpage" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Catpage',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $catpages->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection