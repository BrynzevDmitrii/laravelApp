@extends('admin.index')
@section('dashbord')
<div class="d-flex justify-content-between flex-md-column align-items-start pb-2 mb-3 border-bottom min-vw-100">
    @csrf
    <h1 class="h2">Add news</h1>
    <form methot="post" action="{{route('admin.news')}}" class="form-control ">
        <div class="form-group min-vw-100 ">
            <lable for='title'>Заголовок</lable>
            <input type="text" id="title" name="title" class="form-control" value = "{{ old('title') }}">
        </div>
        <div class="form-group min-vw-100 ">
            <lable for='author'>Автор</lable>
            <input type="author" id="autor" name="autor" class="form-control" value = "{{ old('author') }}">
        </div>
        <div class="form-group min-vw-100 mb-30">
            <lable for='descriotion'>Статья</lable>
            <textarea type="text" id="descriotion" name="descriotion" class="form-control ">
                {{ old('descriotion') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-success min-vw-40">Seve</button>
    </form>
</div>
@endsection
