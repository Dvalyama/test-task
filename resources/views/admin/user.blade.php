@extends('layouts.base')

@section('content')
    <div class="user-blade-container">
        <a href="{{ url()->previous() }}" class="back-btn">Назад</a>
        <h1>Список користувачів</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ім'я</th>
                    <th>Email</th>
                    <th>Роль</th>
                    <th>Дія</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <ul>
                                @foreach($user->roles as $role)
                                    <li>{{ $role->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td><a href="{{ route('user.edit', $user->id) }}">Редагувати</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


