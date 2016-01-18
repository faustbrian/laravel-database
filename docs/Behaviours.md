# Behaviours

##### Slug

```php
class User extends Model
{
    use SlugTrait;

    public function slugStrategy()
    {
        return 'username';
    }
}
```

##### Uuid

```php
class User extends Model
{
    use UuidTrait;

    public function uuidStrategy()
    {
        return 'uuid4';
    }
}
```

##### Hashid

```php
class User extends Model
{
    use HashidTrait;

    public function hashidStrategy()
    {
        return 'id';
    }
}
```
