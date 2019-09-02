@extends('template')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<form method="POST" action="/test/blog/create/submit" style="width: 550px" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label for="formTitle">Nosaukums</label>
                <input value="{{@old('title')}}" id="formTitle" type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="formFile">Attēla adrese</label>
                    <input id="formFile" type="file" name="picture" class="form-control @error('picture') is-invalid @enderror">
                    @error('picture')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="formBody">Teksts</label>
                    <textarea id="formBody" name="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"></textarea>
                    @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="formExcerpt">Īsais teksts</label>
                    <textarea id='formExcerpt' name="excerpt" cols="30" rows="3" class="form-control @error('excerpt') is-invalid @enderror"></textarea>
                    @error('excerpt')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="formAuthor">Autors</label>
                    <input id="formAuthor" type="text" name="author" class="form-control @error('author') is-invalid @enderror">
                    @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="formSlug">Links</label>
                    <input id="formSlug" type="text" name="slug" class="form-control @error('llug') is-invalid @enderror">
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Saglabāt</button>
    </form>
@endsection
