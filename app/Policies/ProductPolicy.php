<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Product $product)
    {
        // Allow anyone to view a product (you can customize this if needed)
        return true; // Or: return $user->role === 'viewer' || $user->role === 'editor' || $user->role === 'admin';  If you want to restrict viewing
    }

    public function update(User $user, Product $product)
    {
        return $user->role === 'editor' || $user->role === 'admin';
    }

    public function delete(User $user, Product $product)
    {
        return $user->role === 'admin';
    }

    // Optional: before method for admin bypass
    public function before(User $user, $ability) {
        if ($user->role === 'admin') {
            return true;
        }
    }
}