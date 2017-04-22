<?php



declare(strict_types=1);



namespace BrianFaust\Database\Traits\Models;

trait CamelCaseAttributes
{
    public $enforceCamelCase = true;

    public function setAttribute($key, $value)
    {
        parent::setAttribute($this->getSnakeKey($key), $value);
    }

    public function getAttribute($key)
    {
        if (method_exists($this, $key)) {
            return $this->getRelationshipFromMethod($key);
        }

        return parent::getAttribute($this->getSnakeKey($key));
    }

    public function attributesToArray()
    {
        return $this->toCamelCase(parent::attributesToArray());
    }

    public function getAttributes()
    {
        return $this->attributesToArray();
    }

    public function relationsToArray()
    {
        return $this->toCamelCase(parent::relationsToArray());
    }

    public function toCamelCase($attributes)
    {
        $convertedAttributes = [];

        foreach ($attributes as $key => $value) {
            $key = $this->getTrueKey($key);
            $convertedAttributes[$key] = $value;
        }

        return $convertedAttributes;
    }

    public function getOriginal($key = null, $default = null)
    {
        return array_get($this->toCamelCase($this->original), $key, $default);
    }

    private function toSnakeCase($attributes)
    {
        $convertedAttributes = [];

        foreach ($attributes as $key => $value) {
            $convertedAttributes[$this->getSnakeKey($key)] = $value;
        }

        return $convertedAttributes;
    }

    public function getTrueKey($key)
    {
        // If the key is a pivot key, leave it alone - this is required internal behaviour
        // of Eloquent for dealing with many:many relationships.
        if ($this->isCamelCase() && strpos($key, 'pivot_') === false) {
            $key = camel_case($key);
        }

        return $key;
    }

    public function isCamelCase()
    {
        return $this->enforceCamelCase or (isset($this->parent) && method_exists($this->parent, 'isCamelCase') && $this->parent->isCamelCase());
    }

    protected function getSnakeKey($key)
    {
        return snake_case($key);
    }

    public function __isset($key)
    {
        $key = snake_case($key);

        return parent::__isset($key);
    }
}
