<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $item
 * @property int $operator
 * @property int $id
 */
class ImportLog extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'import_logs';

    /**
     * 导入日志有很多明细.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details(): HasMany
    {
        return $this->hasMany(ImportLogDetail::class, 'id', 'log_id');
    }

}
