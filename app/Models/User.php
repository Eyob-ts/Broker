<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Data\Role;
use App\Enums\PermissionEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => Role::class,
        ];
    }

    /**
     * Check if user has a specific role
     */
    public function hasRole(string $role): bool
    {
        return $this->role->value === $role;
    }

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if user is editor
     */
    public function isEditor(): bool
    {
        return $this->hasRole('editor');
    }

    /**
     * check if user  is a regular user (client/customer)
     */
    public function isUser(): bool
    {
        return $this->hasRole('user');
    }

    /**
     * Check if user has admin or editor role
     */
    public function isAdminOrEditor(): bool
    {
        return $this->isAdmin() || $this->isEditor() || $this->isUser();
    }
    public function hasPermission(PermissionEnum $permission): bool
    {
        return in_array($permission, $this->role->permissions());
    }
}
