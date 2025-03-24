@extends('layouts.app')

@section('main')
<div class="main">
    <div class="flex wrap wrapper">
        <div class="tabs">
            <ul class="tab-list">
                <li class="tab-item active" tabindex="0">タブ1</li>
                <li class="tab-item" tabindex="0">タブ2</li>
                <li class="tab-item" tabindex="0">タブ3</li>
            </ul>
            <div class="tab-content">
                <div class="tab-panel active">
                <p>１番目のコンテンツ</p>
                </div>
                <div class="tab-panel">
                <p>２番目のコンテンツ</p>
                </div>
                <div class="tab-panel">
                <p>３番目のコンテンツ</p>
                </div>
            </div>
        </div>
    </div>


    <a href="http://localhost:8000/tab/accordion">次の画面へ</a>

</div>
    
@endsection
