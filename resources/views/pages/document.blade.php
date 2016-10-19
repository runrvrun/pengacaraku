@extends('layouts.app')

@section('title')
- {{ $doc->document_title }}
@endsection

@section('content')
<div class="drop-shadow">
    <div class="jumbotron category-jumbotron" style="background: #B9121B no-repeat center center; background-size: cover;">    
        <div class="header-box">
            <h1 class="page-title">Buat {{ $doc->document_title }}</h1>            
            <a href="{{ url('create-doc/'.$doc->slug) }}"><button type="submit" class="btn btn-lg btn-warning">Buat Dokumen</button></a>            
            <h4>Cara kerja</h4>
            <ul>
                <li>Isi data dokumen</li>
                <li>Buat dokumen</li>
                <li>Cetak dokumen</li>
                <li>Tandatangani</li>
            </ul>
        </div>           
    </div>
    <div class="page-content row">
        {{ $doc->document_content }}            
    </div>    
</div>
@endsection