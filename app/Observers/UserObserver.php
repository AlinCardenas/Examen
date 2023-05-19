<?php

namespace App\Observers;

use App\Models\Content;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $content = Content::find(1);
        $content->update(['word' => 'DDR5', 'phrase' => 'Lo logramos, somos programadores.']);
    }

    public function saving(User $user): void
    {
        $content = Content::find(1);
        $content->update(['word' => 'DDR5', 'phrase' => 'Lo logramos, somos programadores.']);   
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
