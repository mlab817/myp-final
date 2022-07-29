<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuidFieldName = $model->getUuidFieldName();
            $useTimeOrderedUuid = $model->getUseTimeOrderedUuid();

            if (empty($model->{$uuidFieldName})) {
                if (App::environment(['local', 'testing'])) {
                    $model->{$uuidFieldName} = static::generateReadableUuidForTesting($model);
                } else {
                    $model->{$uuidFieldName} = ($useTimeOrderedUuid) ?
                        static::generateTimeOrderedUuid()
                        :
                        static::generateUuid();
                }
            }
        });

        /**
         * Listens for a model saving event to prevent a UUID from being changed.
         * TODO: TEST TO SEE WHETHER THIS OBSTRUCTS IF A MODEL IS SAVED MANUALLY RATHER THAN BEING CREATED
         */
        static::saving(function ($model) {
            $uuidFieldName = $model->getUuidFieldName();
            $originalUuid = $model->getOriginal($uuidFieldName);

            if (!empty($originalUuid)) {
                if ($originalUuid !== $model->{$uuidFieldName}) {
                    $model->{$uuidFieldName} = $originalUuid;
                    Log::warning('Attempt to change existing UUID blocked');
                }
            }
        });
    }

    /**
     * Generates a test UUID with the model name as a prefix for easy distinction when testing
     *
     * @param $model
     *
     * @return string
     */
    public static function generateReadableUuidForTesting($model): string
    {
        $className = strtolower(class_basename($model)) . '-';

        $numToRemove = strlen($className);
        $remaining = (36 - (int) $numToRemove);

        return $className . Str::substr(static::generateUuid(), $numToRemove, $remaining);
    }

    /**
     * Generates a "Time Ordered" UUID which is generated in conjunction with the server timestamp.  Less unique, but
     * useful if ordering by time is important
     *
     * @return string
     */
    public static function generateTimeOrderedUuid(): string
    {
        return (string) Str::orderedUuid();
    }

    /**
     * Generates a standard version 4 UUID
     *
     * @return string
     */
    public static function generateUuid(): string
    {
        return (string) Str::uuid();
    }

    /**
     * Checks to see if "Time Ordered" UUIDs have been specified
     *
     * @return bool
     */
    public function getUseTimeOrderedUuid(): bool
    {
        if ($this->useTimeOrderedUuid) {
            return true;
        }

        return false;
    }

    /**
     * Check to see if a specific column name has been specified for the UUID
     *
     * @return string
     */
    public function getUuidFieldName(): string
    {
        if ($this->primaryKeyIsUuid) {
            return $this->getKeyName();
        }

        if (!empty($this->uuidFieldName)) {
            return $this->uuidFieldName;
        }

        return 'uuid';
    }

    /**
     *  Scoping method to search for a record via the UUID
     *
     * @param $query
     * @param $uuid
     *
     * @return mixed
     */
    public function scopeByUuid($query, $uuid)
    {
        return $query->where($this->getUuidFieldName(), $uuid);
    }
}
