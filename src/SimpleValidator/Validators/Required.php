<?php

/*
 * This file is part of Simple Validator.
 *
 * (c) Frédéric Guillot <contact@fredericguillot.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SimpleValidator\Validators;

use SimpleValidator\BaseValidator;

/**
 * @author Frédéric Guillot <contact@fredericguillot.com>
 */
class Required extends BaseValidator
{
    public function execute(array &$data)
    {
        if (! isset($data[$this->field])) {

            return false;
        }

        if ($data[$this->field] === null || $data[$this->field] === '') {

            return false;
        }

        return true;
    }
}
