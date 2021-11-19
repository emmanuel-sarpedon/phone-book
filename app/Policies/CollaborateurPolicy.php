<?php

namespace App\Policies;

use App\Models\Collaborateur;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CollaborateurPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->role === 'admin') {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Collaborateur $collaborateur)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role === 'manager';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Collaborateur $collaborateur)
    {
        return $user->role === 'manager';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Collaborateur  $collaborateur
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Collaborateur $collaborateur)
    {
        return false;
    }
}
