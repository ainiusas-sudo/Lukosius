<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'goal',
        'count'
    ];

    protected $casts = [
        'goal' => 'integer',
        'count' => 'integer',
    ];

    // Status constants
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';

    // Helper methods
    public function isCompleted(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }

    public function isInProgress(): bool
    {
        return $this->status === self::STATUS_IN_PROGRESS;
    }

    public function getProgressPercentage(): int
    {
        if (!$this->goal || $this->goal <= 0) {
            return $this->isCompleted() ? 100 : 0;
        }

        $percentage = ($this->count / $this->goal) * 100;
        return min(100, (int) $percentage);
    }

    public function incrementCount(int $amount = 1): void
    {
        $this->increment('count', $amount);
        
        // Auto-complete if goal is reached
        if ($this->goal && $this->count >= $this->goal) {
            $this->update(['status' => self::STATUS_COMPLETED]);
        }
    }
}
