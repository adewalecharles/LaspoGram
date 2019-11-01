<?php

namespace LaspoGram\Policies;

use LaspoGram\User;
use LaspoGram\Profile;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any profiles.
     *
     * @param  \LaspoGram\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the profile.
     *
     * @param  \LaspoGram\User  $user
     * @param  \LaspoGram\Profile  $profile
     * @return mixed
     */
    public function view(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can create profiles.
     *
     * @param  \LaspoGram\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the profile.
     *
     * @param  \LaspoGram\User  $user
     * @param  \LaspoGram\Profile  $profile
     * @return mixed
     */
    public function update(User $user, Profile $profile)
    {
        return $user->id == $profile->user_id;
    }

    /**
     * Determine whether the user can delete the profile.
     *
     * @param  \LaspoGram\User  $user
     * @param  \LaspoGram\Profile  $profile
     * @return mixed
     */
    public function delete(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can restore the profile.
     *
     * @param  \LaspoGram\User  $user
     * @param  \LaspoGram\Profile  $profile
     * @return mixed
     */
    public function restore(User $user, Profile $profile)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the profile.
     *
     * @param  \LaspoGram\User  $user
     * @param  \LaspoGram\Profile  $profile
     * @return mixed
     */
    public function forceDelete(User $user, Profile $profile)
    {
        //
    }
}
