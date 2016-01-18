# Traits


##### EncryptAttributes

```php
use DraperStudio\Database\Traits\Models\EncryptAttributes;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use EncryptAttributes;

    protected static function getEncryptedAttributes()
    {
        return ['email'];
    }
}
```
