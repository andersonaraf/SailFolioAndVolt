## FOLIO AND VOLT TODO-LIST

Laravel Folio Install:
```
sail composer require laravel/folio:^1.0@beta 
```

Laravel Livewire Install:
```
sail composer require livewire/livewire:^3.0@beta
```

Laravel Volt Install:
``` 
sail composer require livewire/volt:^1.0@beta
```

Install Folio:
```
sail art folio:install 
```

Install Volt:
```
sail art volt:install
```


let's create a new folio page:
```
sail art make:folio todos
```

***Note:*** This command will create a todos.blade in your resource
```
resources/views/pages/todos.blade.php
```


Now, let's fill the `todos.blade.php` with the following code:
```php
<?php

use function Livewire\Volt\state;
use App\Models\Todo;

state(title: '', description: '', todos: fn () => Todo::all());

$addTodo = function () {
    Todo::create([
        'title' => $this->title,
        'description' => $this->description,
    ]);

    $this->title = '';
    $this->description = '';
    $this->todos = Todo::all();
}; ?>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
@volt
<div>
    <h1>Add Todo </h1>
    <form wire:submit.prevent="addTodo">
        <input type="text" wire:model="title">
        <input type="text" wire:model="description">

        <button type="submit">Add</button>
    </form>

    <h1>Todos</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>
                <div>
                    <p>{{$todo->title}}</p>
                    <p>{{$todo->description}}</p>
                    <hr>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endvolt
</body>
</html>
```

<b>Credits to: https://nunomaduro.com/todo_application_with_laravel_folio_and_volt <b>
