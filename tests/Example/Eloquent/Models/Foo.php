<?php

namespace Pangolinkeys\TestFramework\Tests\Example\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foo extends Model
{
    use SoftDeletes;

    protected $fillable = [];

    protected $table = 'foos';

    /**
     * Get the bar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bar()
    {
        return $this->belongsTo(Bar::class);
    }
}