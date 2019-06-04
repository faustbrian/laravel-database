# Repositories

##### Create a new Repository

```php
use Artisanry\Database\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function getModelClass()
    {
        return \App\User::class;
    }
}
```
