<?php

namespace Dcatplus\Admin\Grid\Column\Filter;

use Dcatplus\Admin\Grid\Model;

class Lt extends Equal
{
    /**
     * Add a binding to the query.
     *
     * @param  string  $value
     * @param  Model|null  $model
     */
    public function addBinding($value, Model $model)
    {
        $value = trim($value);
        if ($value === '') {
            return;
        }

        $this->withQuery($model, 'where', ['<', $value]);
    }
}
