# Laravel Runtime Cache Class

Simple global runtime cache class for caching variables

## To use

Create a directory named `Tools` under `app/` and copy `RuntimeCache.php` inside the created directory

Path should look like below `app/Tools/RuntimeCache.php`

## Sample Usage

```php
use Illuminate\Support\Facades\DB;
use App\Tools\RuntimeCache;

class User {

	public function get($id = false)
	{
		$cache_key = 'user.get.' . $id;

		if(RuntimeCache::exists($cache_key))
		{
			$user = RuntimeCache::get($cache_key);
		}
		else
		{
			$user = DB::table('users')
				->where('id', $id)
				->first();
			
			RuntimeCache::set($cache_key, $user);
		}

		return $user;
	}
}
```