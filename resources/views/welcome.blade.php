<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ВОПРОС-ОТВЕТ</title>

</head>
<body>
    <form action="/" method="POST">
        @csrf
        <input type ="text" name="title" placeholder="Заголовок вопроса">
        <input type ="text" name="text" placeholder="Текст">
        <input type="submit" value="Отправить">
    </form>
    @foreach ($question as $items)
    <h1>Вопрос: №{{$items->id}}</h1>
    <h2><a href="#" >Заголовок: {{$items->title}}</a></h2>
    <p>Текст: {{$items->text}}</p>
    <p>Дата создания: {{ $items->created_at }}</p>
    <p>Статус: {{ $items->status? 'Не полезен' : 'Полезен' }}</p>
    <a href="#">Полезен</a>
    @endforeach


    
</body>
</html>