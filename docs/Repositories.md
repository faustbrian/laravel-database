# Repositories

##### Create a new Repository

```php
use DraperStudio\Database\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function getModelClass()
    {
        return \App\User::class;
    }
}
```
