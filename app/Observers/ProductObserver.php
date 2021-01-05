<?php

namespace App\Observers;

use App\Models\Products;

class ProductObserver
{
    /**
     * Handle the products "created" event.
     *
     * @param  \App\Products  $products
     * @return void
     */
    public function created(Products $products)
    {
        //
    }

    /**
     * Handle the products "updated" event.
     *
     * @param  \App\Products  $products
     * @return void
     */
    public function updated(Products $products)
    {
        //
    }

    /**
     * Handle the products "deleted" event.
     *
     * @param  \App\Products  $products
     * @return void
     */
    public function deleting(Products $products)
    {
        //
        $products->image()->delete();
    }

    /**
     * Handle the products "restored" event.
     *
     * @param  \App\Products  $products
     * @return void
     */
    public function restored(Products $products)
    {
        //
    }

    /**
     * Handle the products "force deleted" event.
     *
     * @param  \App\Products  $products
     * @return void
     */
    public function forceDeleted(Products $products)
    {
        //
    }
}
