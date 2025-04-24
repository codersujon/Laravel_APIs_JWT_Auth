# 👨‍💼 Laravel REST APIs JWT (JSON Web Token)

The default Users and Courses API Development with the help of JWT Authentication.

---

## 🌐 Base URL
http://localhost:8000/api/

---

## Tables: Default Users & Courses
- **Users** `id, name, email, phone_no`  
- **Courses** `id, user_id, title, description, total_videos`  

## JWT Package Installation Laravel 12:
- **Step 1** 

```markdown
composer require tymon/jwt-auth
```

- **Step 2** 

```markdown
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

- **Step 3** 

```markdown
php artisan jwt:secret
```

- **Step 4** 
- `config/auth.php ফাইলে guards অ্যারে-তে নিচের মতো একটি নতুন গার্ড যোগ করুন: এটি API রিকোয়েস্টের জন্য JWT অথেন্টিকেশন চালু করবে` 

```markdown
'guards' => [
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

- **Step 5** 
- `User মডেলে নিচের কোডটি যোগ করুন:` 
 
```markdown
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    // অন্যান্য কোড

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
```
JWT Package Installation Compelete.

## 📚 API Endpoints