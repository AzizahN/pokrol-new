<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $type
 * @property string $title
 * @property string $slug
 * @property string $thumbnail
 * @property string $contents
 * @property string $status
 * @property string $note
 * @property integer $view
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Comment[] $comments
 * @property ContentTag[] $contentTags
 */
class Content extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'type', 'title', 'slug', 'thumbnail', 'contents', 'status', 'note', 'view', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function types()
    {
        return $this->belongsTo('App\Models\Type', 'type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentTags()
    {
        return $this->hasMany('App\Models\ContentTag');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::whereHas('user', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
                ->orWhere('title', 'like', '%' . $query . '%')
                ->orWhere('contents', 'like', '%' . $query . '%')
                ->orWhere('created_at', 'like', '%' . $query . '%');
    }

    public static function searchBlog($query)
    {
        return empty($query) ? static::query()->whereType(1)
            : static::whereType(1)->where(function ($q) use ($query) {
                $q->whereHas('user', function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%');
                })
                    ->orWhere('title', 'like', '%' . $query . '%')
                    ->orWhere('contents', 'like', '%' . $query . '%')
                    ->orWhere('created_at', 'like', '%' . $query . '%');
            });
    }

    public static function searchEvent($query)
    {
        return empty($query) ? static::query()->whereType(2)
            : static::whereType(1)->where(function ($q) use ($query) {
                $q->whereHas('user', function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%');
                })
                    ->orWhere('title', 'like', '%' . $query . '%')
                    ->orWhere('contents', 'like', '%' . $query . '%')
                    ->orWhere('created_at', 'like', '%' . $query . '%');
            });
    }

    public static function searchNews($query)
    {
        return empty($query) ? static::query()->whereType(3)
            : static::whereType(1)->where(function ($q) use ($query) {
                $q->whereHas('user', function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%');
                })
                    ->orWhere('title', 'like', '%' . $query . '%')
                    ->orWhere('contents', 'like', '%' . $query . '%')
                    ->orWhere('created_at', 'like', '%' . $query . '%');
            });
    }
}
