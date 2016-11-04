<?php

namespace BrianFaust\Database\Traits\Repositories;

use BrianFaust\Database\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Validator;

trait HttpTrait
{
    public function get($id, array $data)
    {
        $this->validate($data, $this->getModel()->readValidationRules());

        return $this->findById($id);
    }

    public function post(array $data)
    {
        $this->validate($data, $this->getModel()->createValidationRules());

        return $this->create($data);
    }

    public function put($id, array $data)
    {
        $this->validate($data, $this->getModel()->updateValidationRules());

        return $this->update($id, $data);
    }

    public function destroy($id, array $data)
    {
        $this->validate($data, $this->getModel()->deleteValidationRules());

        return $this->delete($id);
    }

    public function patch($id, array $data)
    {
        $this->validate($data, $this->getModel()->updatePartialValidationRules());

        return $this->update($id, $data);
    }

    protected function validate(array $data, array $rules)
    {
        $validation = app('validator')->make($data, $rules);

        if ($validation->fails()) {
            throw new ValidationException(
                $validation->messages()->getMessages(), 'Validation failed'
            );
        }
    }
}
