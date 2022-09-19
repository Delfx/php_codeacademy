<?php 

namespace App\Services;

class Tag
{

    public $text;
    public $href;
    public $link;

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
    public function setAttr($href, $link)
    {
        $this->href = $href;
        $this->link = $link;

        return $this;
    }


    public function show()
    {
        print "<{$this->tag} {$this->href}='{$this->link}'>{$this->text}</{$this->tag}>";
    }

    public function get()
    {
        return "<{$this->tag} {$this->href}='{$this->link}'>{$this->text}</{$this->tag}>";
    }
}


