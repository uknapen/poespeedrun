<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    use HasFactory, Sortable;

    public $sortable = ['time', 'date'];
    public function scopeFilter($query, array $filters)
    {
        if ($filters['category'] ?? false) {
            $query->where('category', 'like', '%' . request('category') . '%');
        }

        if ($filters['filtre'] ?? false) {
            $query->where('version', 'like', '%' . request('filtre') . '%')
                ->orWhere('class', 'like', '%' . request('filtre') . '%')
                ->orWhere('deathless', 'like', '%' . request('filtre') . '%')
                ->orWhere('archetype', 'like', '%' . request('filtre') . '%');
        }
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'category' => 'required',

            'version' => 'required',

            'class' => 'required',

            'timeH' => 'required',

            'timeM' => 'required',

            'timeS' => 'required',

            'url' => 'required|url',

            'archetype' => 'required',

            'deathless' => 'required',

            'comment' => 'nullable'
    ];
}
