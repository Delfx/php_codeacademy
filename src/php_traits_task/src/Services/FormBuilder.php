<?php

namespace App\Services;

class FormBuilder
{
    use CloseTraits, OpenTraits, CustomFormsTraits;


    public function password(string $value, string $inputId = null)
    {
        if (is_null($inputId)){
            return $this->input('password', $value, '');
        }
        return $this->input('password', $value, $inputId);
    }

    public function textarea(string $value, string $inputId = null)
    {
        if (is_null($inputId)){
            return $this->input('text', $value, '');
        }
        return $this->input('text', $value, $inputId);
    }


}
