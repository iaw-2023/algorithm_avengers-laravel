<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TallesValidos implements ValidationRule
{

    protected array $allowedSizes;

    public function __construct(array $allowedSizes = ['XS','S','M','L','XL','XXL','XXXL','XXXXL','XXXXXL']){
        $this->allowedSizes = $allowedSizes;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void{   
        // Split input into trimmed values
        $submittedSizes = array_map('trim', explode(',', $value));

        // Check for empty values
        if (in_array('', $submittedSizes, true)) {
            $fail("El $attribute contiene elementos vacíos.");
            return;
        }

        // Check validity of each size
        foreach ($submittedSizes as $size) {
            if (!in_array($size, $this->allowedSizes, true)) {
                $fail("El $attribute contiene un talle inválido: $size.");
                return;
            }
        }
    }
}