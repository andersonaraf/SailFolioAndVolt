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
