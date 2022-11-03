<?php

namespace App\Policies;

use App\Models\Peticione;
use App\Models\User;
use http\Client\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeticionePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticione  $peticione
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Peticione $peticione)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticione  $peticione
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Peticione $peticione)
    {
        return $user->role_id==1
            ? Response::allow()
            : Response::deny('You are not allowed to perform this action.');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticione  $peticione
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Peticione $peticione)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticione  $peticione
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Peticione $peticione)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Peticione  $peticione
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Peticione $peticione)
    {
        //
    }

    public function before(User $user, string $ability){
        if ($user->isAdministrator()) {
            return true;
        }
    }

    public function firmar(User $user, Peticione $peticione){
        return $user->id!=$peticione->user_id;
    }

}
