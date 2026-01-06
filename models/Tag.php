<?php
class Tag
{
    private $tag_id;
    private $label;

    public function __construct($tag_id, $label)
    {
        $this->tag_id = $tag_id;
        $this->label = $label;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return "Tag (tag_id: {$this->tag_id}, label: {$this->label})";
    }

    public function listTags() {}
    public function addTag() {}
    public function deleteTag() {}
}
