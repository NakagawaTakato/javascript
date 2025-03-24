@extends('layouts.app')

@section('main')
<div class="main">
    <div class="flex wrap wrapper">
        <div class="accordions">
            <div class="accordion">
                <div class="accordion__menu">
                <button class="accordion__button">メニュー１</button>
                <div class="accordion__body">
                    <p class="accordion__textOne">
                    サブメニュー１
                    </p>
                    <p class="accordion__textTwo">
                    サブメニュー２
                    </p>
                    <p class="accordion__textThree">
                    サブメニュー３
                    </p>
                    <p class="accordion__textFour">
                    サブメニュー４
                    </p>
                </div>
                </div>
                <div class="accordion__menu">
                <button class="accordion__button">メニュー２</button>
                <div class="accordion__body">
                    <p class="accordion__textOne">
                    サブメニュー１
                    </p>
                    <p class="accordion__textTwo">
                    サブメニュー２
                    </p>
                    <p class="accordion__textThree">
                    サブメニュー３
                    </p>
                    <p class="accordion__textFour">
                    サブメニュー４
                    </p>
                </div>
                </div>
                <div class="accordion__menu">
                <button class="accordion__button">メニュー３</button>
                <div class="accordion__body">
                    <p class="accordion__textOne">
                    サブメニュー１
                    </p>
                    <p class="accordion__textTwo">
                    サブメニュー２
                    </p>
                    <p class="accordion__textThree">
                    サブメニュー３
                    </p>
                    <p class="accordion__textFour">
                    サブメニュー４
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <a href="http://localhost:8000/tab/accordion/table">次の画面へ</a>

</div>
    
@endsection
