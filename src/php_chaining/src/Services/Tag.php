<?php 

namespace App\Services;

class Tag
{

    private $text;
    public $attr = [];

    public function __construct(public string $tag) {
        $this->tag = $tag;
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
            $attr .= sprintf(' %s="%s"', $key, $value);
        }
        $this->attr = [];
        return "<{$this->tag} {$attr}>{$this->text}</{$this->tag}>";
    }
}


