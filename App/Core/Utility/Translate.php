<?php declare(strict_types=1);

namespace APP\Core\Utility;

class Translate {

    private array  $dicts = [];
    
    /**
     * Add transaction text
     *
     * @param  string $key
     * @param  string $value
     * @return bool
     */
    public function Add(string $key, string $value): bool {
        
        if(!isset($this->dicts[$key]) || empty($this->dicts[$key])) {
        
            $this->dicts[$key] = $value;
            return true;
        }
        else {
        
            return false;
        }
    }
    
    /**
     * Get transaction.
     *
     * @param  string $key
     * @return string|bool
     */
    public function Get(string $key) : string|bool {

        if(isset($this->dicts[$key])) {

            return $this->dicts[$key];
        }
        else {

            return false;
        }
    }

}