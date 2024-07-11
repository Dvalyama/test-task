@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Панель керування адміністратора</h1>
        <p>Ласкаво просимо до панелі керування адміністратора!</p>
        <div>
            <a href="{{ route('admin.users') }}">
                {{ __('Керування користувачами') }}
            </a>
        </div>
        <div>
            <a href="{{ route('admin.roles') }}">
                {{ __('Керування ролями') }}
            </a>
        </div>
    </div>
@endsection
@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Панель керування адміністратора</h1>
        <p>Ласкаво просимо до панелі керування адміністратора!</p>
        <div>
            <a href="{{ route('admin.users') }}">
                {{ __('Керування користувачами') }}
            </a>
        </div>
        <div>
            <a href="{{ route('admin.roles') }}">
                {{ __('Керування ролями') }}
            </a>
        </div>
    </div>
@endsection

<div class="row mt-5">
    <div class="col-md-6">
        <h2>Як створити пост</h2>
        <p>Для створення поста необхідно зареєструватися на нашому порталі.</p>
    </div>
    <div class="col-md-6">
        <h2>Як отримати токен</h2>
        <p>Для отримання токену, відвідайте URL: <a href="https://test.lndo.site/user/generate-token">https://test.lndo.site/user/generate-token</a>. Потім вставте отриманий токен в програму Postman: Authorization -> Auth Type -> Bearer Token -> Token.</p>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12 text-center">
        <h2>Шляхи API</h2>
        <p>Наш API надає доступ до різноманітних функцій для інтеграції з іншими системами та послугами.</p>
    </div>
</div>


