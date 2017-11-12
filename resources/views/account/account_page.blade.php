@extends('layouts.app')

@section('content')
    <div class="container accaunt-maps-info">
        <div class="row">
            <div class="col-md-6">
                <div id="mymap">
                    {!! Mapper::render() !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3 user-accaunt-ava">
                        <img src="/images/user-1.jpg" alt="user1">
                        <form class="" action="#" method="post" enctype="multipart/form-data">
                            <input type="file" id="upload-ava" name="pictures[]" />
                            <label class="btn btn-default" for="upload-ava">Загрузить аватар</label>
                        </form>
                        <img src="/images/car-1.jpg" alt="user1">
                        <form class="" action="#" method="post" enctype="multipart/form-data">
                            <input type="file" id="upload-ava" name="pictures[]" />
                            <label class="btn btn-default" for="upload-ava">Загрузить фото авто</label>
                        </form>
                    </div>
                    <div class="col-md-9 user-accaunt-info">
                        <div class="logged-user-info">
                            <span style='display:none' class="user-id-hod">{{$user->id}}</span>
                            <span class="name-user-hod">{{$user->name}}</span>
                            <span class="tel-user-hod">{{$user->phone_number}}</span>
                            <span class="auto-number-user-hod">{{$user->auto_number}}</span>
                            <span class="auto-user-hod">Audi</span>
                        </div>
                        <textarea class="form-control user-messages" rows="8" cols="80" placeholder="Введите описание вашей поломки ......" ></textarea>
                        <p class="error">Вы не ввели причину поломки!</p>
                        {{-- <textarea name="name" rows="10" cols="80" placeholder="Введите описание вашей поломки ......"></textarea> --}}
                        <button type="button" class="btn btn-danger sos" id="_myCord" >Сигнал о помощи</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
