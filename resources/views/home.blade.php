<!DOCTYPE html>
<html lang="">
<head>
    <title>Тестовое задание</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <div class="container">
        <div class="w-50 m-auto text-center">
            @if(session('success'))
                @include('inc.success', ['message' => session('success')])
            @endif
            @if(count($errors->all()))
                @include('inc.error', ['errors' => $errors->all()])
            @endif
            <form action="{{ route('store-form') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Укажите имя</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="phone">Укажите телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

