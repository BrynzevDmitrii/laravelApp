@extends('layouts.main');
@section('main')
<div class="d-flex justify-content-between  flex-md-column align-items-start pb-2 mb-3 border-bottom ">
    @csrf
    <h1 class="h2">Feedback form</h1>
    <form methot="post" action="{{route('admin.news')}}" class="form-control ">
        <div class="form-group min-vw-100 ">
            <lable for='title'>Имя пользователя</lable>
            <input type="text" id="title" name="title" class="form-control" value = "{{ old('title') }}">
        </div>
        <div class="form-group min-vw-100 mb-30">
            <lable for='descriotion'>
            Отзыв по работе проекта
            </lable>
            <textarea type="text" id="descriotion" name="descriotion" class="form-control ">
                {{ old('descriotion') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-success min-vw-40">Seve</button>
    </form>
</div>
@endsection

