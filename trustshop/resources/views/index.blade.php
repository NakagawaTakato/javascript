@extends('layouts.app')

@section('main')
<div class="main">
  <div class="flex wrap wrapper">

    <header class="wrapper-header">
      <nav class="wrapper-header-nav">
          <ul class="wrapper-header-nav-ul" id="header-menu">
              <h1 class="wrapper-header-nav-h1"><span class="wrapper-header-nav-span">Menu</span></h1>
              <li class="wrapper-header-nav-li"><a class="wrapper-header-nav-li-a" href="">HOME</a></li>
              <li class="wrapper-header-nav-li"><a class="wrapper-header-nav-li-a" href="">ABOUT</a></li>
              <li class="wrapper-header-nav-li"><a class="wrapper-header-nav-li-a" href="">SERVICE</a></li>
              <li class="wrapper-header-nav-li"><a class="wrapper-header-nav-li-a" href="">FAQ</a></li>
              <li class="wrapper-header-nav-li"><a class="wrapper-header-nav-li-a" href="">CONTACT</a></li>
          </ul>
      </nav>
      <div id="hamburger" class="hamburger">
          <span></span><span></span><span></span>
      </div>
    </header>

    <!-- オーバーレイ要素を追加 -->
    <div id="overlay"></div>

    <p class="wrapper-title flex center align-items-center">hambugerMenu</p>

    <div class="wrapper-group"></div>
    <div class="wrapper-box"></div>


    <a href="http://localhost:8000/tab">次の画面へ</a>

    
  </div>
</div>
@endsection
