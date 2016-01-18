<?php



namespace DraperStudio\Database\Contracts\Repositories\Traits;

use DraperStudio\Database\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Validator;


interface HttpTrait
{

    public function get($id, array $data);


    public function post(array $data);


    public function put($id, array $data);


    public function destroy($id, array $data);


    public function patch($id, array $data);


    protected function validate(array $data, array $rules);
}
