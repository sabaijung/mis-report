<?php
namespace App\Models\Basic;

use Illuminate\Database\Eloquent\Model;

class BasicPrefixs extends Model
{
    protected $table = 'basic_prefixs';
    protected $primaryKey = 'id';
    protected $fillable = ['created_at', 'updated_at', 'title', 'title_en', 'state', 'created_by', 'updated_by', 'shortname', 'shortname_en', 'tag'];
}
