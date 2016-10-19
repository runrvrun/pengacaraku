@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Catpage {{ $catpage->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/catpages/' . $catpage->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Catpage"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/catpages', $catpage->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Catpage',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $catpage->id }}</td>
                                    </tr>
                                    <tr><th> Catpage Author </th><td> {{ $catpage->catpage_author }} </td></tr><tr><th> Catpage Title </th><td> {{ $catpage->catpage_title }} </td></tr><tr><th> Catpage Subtitle </th><td> {{ $catpage->catpage_subtitle }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection