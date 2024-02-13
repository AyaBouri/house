<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class OptionList extends Model
{
    use HasFactory;
    private $options=[];
    private $selectedOption=null;
    private $multiple=false;
    //private $selectedOptions = [];
    public function addOption(Option $option){
        $this->options[]=$option;
    }
    public function removeOption(Option $option){
        unset($this->options[$option->getid()]);
    }
    public function getOptionById($id){
        return $this->options[$id] ?? null;
    }

    public function getSelectedOptions(){
        if (empty($this->options)) {
            return null; // Handle no options case
        }
        // Check if a selected option is already set
        if ($this->selectedOption) {
            return $this->selectedOption;
        }
        // Choose the first option by default
        return $this->options[0];
    }
    private $selectedOptionId; // Or store selected option value
    public function getSelectedOption(){
        if (!$this->selectedOptionId) {
            return null; // Handle no selected option case
        }
        return $this->options[$this->selectedOptionId]; // Assuming options are stored by ID
    }
}
