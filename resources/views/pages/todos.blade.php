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
