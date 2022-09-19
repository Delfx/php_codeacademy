<?php

namespace App\Services\Traits;

trait CustomFormsTraits
{

    private int $typeNumber = 0;

    public function label(string $labelId)
    {
        return <<<HTML
        <label class="form-label" for="{$labelId}"></label>
        HTML;
    }

    public function input(string $type, string $value, string $inputId)
    {
        $this->typeNumber++;
        return <<<HTML
        <div class="mb-3">
        <label class="form-label" for="{$inputId}"> {$value} </label>
        <input type="{$type}" class="form-control" id="{$inputId}" name="{$this->typeNumber}{$type}">
        </div>
        HTML;
    }

    public function submit(string $buttonName = null)
    {
        if (is_null($buttonName) || empty($buttonName)) {
            return <<<HTML
            <button type="submit" class="btn btn-primary">Submit</button>
          HTML;
        }
        return <<<HTML
        <button type="submit" class="btn btn-primary">{$buttonName}</button>
        HTML;
    }
}
