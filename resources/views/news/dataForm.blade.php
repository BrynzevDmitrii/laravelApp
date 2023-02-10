@extends('layouts.main');
@section('main')

<div class="d-flex justify-content-between  flex-md-column align-items-start pb-2 mb-3 border-bottom ">
    @csrf
    <h1 class="h2">Запрос данных</h1>
    <form methot="post" action="{{route('admin.news')}}" class="form-control ">
        <div class="form-group min-vw-100 ">
            <lable for='title'>Имя закзчика</lable>
            <input type="text" id="name" name="name" class="form-control" value = "{{ old('name') }}">
        </div>
        <div class="form-group min-vw-100 ">
            <lable for='phone'>Телефон</lable>
            <input type="number" id="phone" name="phone" class="form-control" value = "{{ old('phone') }}">
        </div>
        <div class="form-group min-vw-100 ">
            <lable for='email'>Email</lable>
            <input type="number" id="email" name="email" class="form-control" value = "{{ old('email') }}">
        </div>
        <div class="form-group min-vw-100 mb-30">
            <lable for='descriotion'>
            Запрос предпологаемой информации
            </lable>
            <textarea type="text" id="info" name="info" class="form-control ">
                {{ old('info') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-success min-vw-40">Отправить</button>
    </form>
</div>
@endsection
