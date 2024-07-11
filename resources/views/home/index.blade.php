@extends('layouts.main')

@section('main.content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="display-4">ДОУМЕНТАЦІЯ</h1>
                <p class="lead">По виконаному завданню.</p>
            </div>
        </div>

        <div class="row mt-5">
    <div class="col-md-6">
        <h2>Як перевірити API</h2>
        <p>
            1. Щоб створити пост, спочатку потрібно <a href="#">зареєструватися</a>.
            <br>
            2. Для отримання токену перейдіть за посиланням <a href="https://test.lndo.site/user/generate-token">https://test.lndo.site/user/generate-token</a> і використайте отриманий токен у програмі Postman: Authorization -> Auth Type -> Bearer Token -> Token.
        </p>
    </div>
    <div class="col-md-6">
        <h2>Опис методів API</h2>
        <ul>
            <li>
                <strong>GET /posts:</strong>
                <ul>
                    <li>Метод контролера: index</li>
                    <li>Опис: Повертає список всіх постів.</li>
                    <li>Назва маршруту: api.posts</li>
                </ul>
            </li>
            <li>
                <strong>GET /posts/{post}:</strong>
                <ul>
                    <li>Метод контролера: show</li>
                    <li>Опис: Повертає конкретний пост за заданим ідентифікатором.</li>
                    <li>Назва маршруту: api.post.show</li>
                </ul>
            </li>
            <li>
                <strong>POST /posts:</strong>
                <ul>
                    <li>Метод контролера: store</li>
                    <li>Опис: Зберігає новий пост.</li>
                    <li>Назва маршруту: api.posts.edit</li>
                </ul>
            </li>
            <li>
                <strong>PUT /posts/{id}:</strong>
                <ul>
                    <li>Метод контролера: update</li>
                    <li>Опис: Оновлює існуючий пост за заданим ідентифікатором.</li>
                    <li>Назва маршруту: api.posts.update</li>
                </ul>
            </li>
            <li>
                <strong>DELETE /posts/{id}:</strong>
                <ul>
                    <li>Метод контролера: delete</li>
                    <li>Опис: Видаляє існуючий пост за заданим ідентифікатором.</li>
                    <li>Назва маршруту: api.posts.delete</li>
                </ul>
            </li>
        </ul>
        <p>Ці маршрути вимагають аутентифікації через Sanctum (auth:sanctum) для доступу до них.</p>
    </div>
</div>
</div>
@endsection
