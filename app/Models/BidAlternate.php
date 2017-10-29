<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BidAlternate
 *
 * @mixin \Eloquent
 * @property-read \App\Models\Airport $airport
 * @property-read \App\Models\Bid $bid
 */
class BidAlternate extends Model
{
    protected $fillable = [];

    public function bid()
    {
        return $this->belongsTo('App\Models\Bid');
    }

    public function airport()
    {
        return $this->belongsTo('App\Models\Airport');
    }
}