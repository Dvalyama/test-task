<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property string $title
 * @property string $content
 * @property bool $published
 * @property Carbon $published_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'content',
        'published', 'published_at',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'published_at' => 'datetime',
        'published' => 'boolean',
    ];

    public static array $rules = [
        'title' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string', 'max:10000'],
        'published_at' => ['nullable', 'string', 'date'],
        'published' => ['nullable', 'boolean'],
    ];

   public function isPublished(): bool
   {
       return $this->published && $this->published_at !== null;
   }


    public function fillAttributes(array $attributes): static
    {
        return $this->fill([
            'user_id'=>$attributes['user_id'],
            'title' => $attributes['title'],
            'content' => $attributes['content'],
            'published_at' => optional(new Carbon($attributes['published_at']))->isValid() ? new Carbon($attributes['published_at']) : null,
            'published' => $attributes['published'] ?? false,
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
