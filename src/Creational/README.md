## Порождающие шаблоны

Порождающие шаблоны (англ. Creational patterns) — шаблоны проектирования, которые имеют дело с процессом создания объектов. Они позволяют сделать систему независимой от способа создания, композиции и представления объектов. Шаблон, порождающий классы, использует наследование, чтобы изменять наследуемый класс, а шаблон, порождающий объекты, делегирует инстанцирование другому объекту.


### Абстрактная фабрика
Абстрактная фабрика (англ. Abstract factory) — порождающий шаблон проектирования, предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых объектов, не специфицируя их конкретных классов. Шаблон реализуется созданием абстрактного класса Factory, который представляет собой интерфейс для создания компонентов системы (например, для оконного интерфейса он может создавать окна и кнопки). Затем пишутся классы, реализующие этот интерфейс


```php
<?php

use Fey\Patterns\Creational\AbstractFactory\FormFactoryInterface as FormFactory;

function registrationForm($name, $email, $password): string
{
    $url = '/register';
    $form = [];
    
    $form[] = FormFactory::open($url);
    $form[] = FormFactory::text('Username', 'username', $name);
    $form[] = FormFactory::text('Email', 'email', $email);
    $form[] = FormFactory::text('Password', 'password', $password);
    $form[] = FormFactory::close();
    
    return implode('\n', $form);
}
```

### Строитель

Строитель (англ. Builder) — порождающий шаблон проектирования предоставляет способ создания составного объекта.
Отделяет конструирование сложного объекта от его представления так, что в результате одного и того же процесса конструирования могут получаться разные представления.


```php
<?php

use Fey\Patterns\Creational\Builder\FormBuilder;

function registrationForm($name, $email, $password): string
{
    $url = '/register';
    
    return FormBuilder::open($url)
        ->text('username', $name, 'Username')
        ->text('first_name', $name, 'First Name')
        ->email('email', $email, 'Email')
        ->password('password', $password, 'Password')
        ->close();
}
```