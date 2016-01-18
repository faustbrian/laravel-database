<?php



namespace DraperStudio\Database\Contracts\Models\Traits;


interface PresentableTrait
{

    public function present()
    {
        if (!$this->presenterInstance) {
            $presenterClass = $this->getPresenterClass();

            $this->presenterInstance = new $presenterClass($this);
        }

        return $this->presenterInstance;
    }
}
