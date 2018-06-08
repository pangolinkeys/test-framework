<?php

namespace Pangolinkeys\TestFramework\Tests\Example\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bar extends Model
{
    use SoftDeletes;

    protected $table = 'bars';

    protected $fillable = [];

    /**
     * Get the foos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foos()
    {
        return $this->hasMany(Foo::class);
    }
}