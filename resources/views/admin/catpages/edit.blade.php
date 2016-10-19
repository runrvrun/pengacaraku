@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Catpage {{ $catpage->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($catpage, [
                            'method' => 'PATCH',
                            'url' => ['/admin/catpages', $catpage->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                                    <div class="form-group {{ $errors->has('catpage_author') ? 'has-error' : ''}}">
                {!! Form::label('catpage_author', 'Catpage Author', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::number('catpage_author', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_author', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_title') ? 'has-error' : ''}}">
                {!! Form::label('catpage_title', 'Catpage Title', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('catpage_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_subtitle') ? 'has-error' : ''}}">
                {!! Form::label('catpage_subtitle', 'Catpage Subtitle', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('catpage_subtitle', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_subtitle', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_headerimg') ? 'has-error' : ''}}">
                {!! Form::label('catpage_headerimg', 'Catpage Headerimg', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('catpage_headerimg', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_headerimg', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_content') ? 'has-error' : ''}}">
                {!! Form::label('catpage_content', 'Catpage Content', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('catpage_content', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_content', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_faq') ? 'has-error' : ''}}">
                {!! Form::label('catpage_faq', 'Catpage Faq', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('catpage_faq', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_faq', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('catpage_status') ? 'has-error' : ''}}">
                {!! Form::label('catpage_status', 'Catpage Status', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::select('catpage_status', ['publish', 'draft'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('catpage_status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('slug', 'Slug', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection