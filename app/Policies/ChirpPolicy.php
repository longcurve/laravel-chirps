<?php
 namespace App\Policies;

 use Illuminate\Auth\Access\HandlesAuthorization;
 use App\Models\Chirp;
 use App\Models\User;
 
 class ChirpPolicy
{
    use HandlesAuthorization;
 
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }
 
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Chirp $chirp): bool
    {
        //
    }
 
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }
 
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Chirp $chirp): bool
    {
        return $chirp->user->is($user);
    }
 
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(App\Models\User $user, Chirp $chirp): bool
    {
        //
        return $this->update($user, $chirp);
    }
}