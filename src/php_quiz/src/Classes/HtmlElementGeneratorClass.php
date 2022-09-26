<?php

namespace App\Classes;

class HtmlElementGeneratorClass
{

    private $text;
    private $tag;
    public $attr = [];

    // public function __construct(public string $tag)
    // {
    //     $this->tag = $tag;
    // }


    public function formOpen()
    {
        $attr = '';
        foreach ($this->attr as $key => $value) {
            $attr .= sprintf(" %s='%s'", $key, $value);
        }
        $this->attr = [];
        return "<form {$attr}>";
    }

    public function formClose()
    {
        return "</form>";
    }

    public function radiosGeneration(string $radiosName,int $valueNumber){
        return <<<HTML
        <div class="form-check">
        <input class="form-check-input" type="radio" name="question" value="$valueNumber" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        $radiosName
        </label>
        </div>
        HTML;
    }

     /**
     * Set the value of tag
     *
     * @return  self
     */ 
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Set the value of attr
     *
     * @return  self
     */
    public function setAttr($attr, $property)
    {
        $this->attr[$attr] = $property;
        return $this;
    }

    public function show()
    {
        print $this->get();
    }

    public function get()
    {
        $attr = '';
        foreach ($this->attr as $key => $value) {
            $attr .= sprintf(" %s='%s'", $key, $value);
        }
        $this->attr = [];
        return "<{$this->tag} {$attr}>{$this->text}</{$this->tag}>";
    }

   
   
}
