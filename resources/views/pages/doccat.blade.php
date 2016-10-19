@extends('layouts.app')

@section('title')
- {{ $catpage->catpage_title }}
@endsection

@section('content')
<div class="drop-shadow">
    <div class="jumbotron category-jumbotron" style="background: #B9121B url('{{URL::asset('uploads/'.$catpage->catpage_headerimg)}}') no-repeat center center; background-size: cover;">
        <div class="header-box">
            <h1 class="page-title">{{ $catpage->catpage_title }}</h1>
            <span>{{ $catpage->catpage_subtitle }}</span>
            <form action="{{ url('/tickets/create?') }}">
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="question"></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Tanya Pengacara</button>
            </form>
        </div>        
    </div>
    <div class="page-bookmark">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"><a href="#faq"><i class="glyphicon glyphicon-question-sign"></i> Pertanyaan Umum</a></li>
            <li role="presentation"><a href="#artikel"><i class="glyphicon glyphicon-comment"></i> Artikel</a></li>
            <li role="presentation"><a href="#dokumen"><i class="glyphicon glyphicon-list-alt"></i> Dokumen</a></li>
        </ul>
    </div>
    <div class="page-content row">
        {{ $catpage->catpage_content }}
    </div>
    <div class="page-faq row">
        <h3><a name="faq"></a>Pertanyaan Umum Tentang {{ $catpage->catpage_title }}</h3>
        {!! $catpage->catpage_faq !!}
    </div>
    <div class="page-doc row">
        <h3><a name="dokumen"></a>Dokumen  {{ $catpage->catpage_title }}</h3>
        <div class="row">
            <div class="col-sm-6">
                <ul>    
                    <?php $count = 0;?>
                    @foreach ($docs as $doc)                  
                    <?php $count = $count+1;?>
                    <li><h4><a href="{{url('dokumen/'.$doc->document->slug)}}">{{ $doc->document->document_title }}</a></h4></li>
                    @if($count = ceil(count($docs)/2) )
                </ul>
            </div>
            <div class="col-sm-6">                
                <ul>
                @endif
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="page-post row">
        <h3><a name="artikel"></a>Artikel Tentang {{ $catpage->catpage_title }}</h3>
        <ul>
            @foreach ($posts as $post)
            <li>{{ $post->post->post_title }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection