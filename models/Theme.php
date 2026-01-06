<?php class Theme
{
    private $Theme_id;
    private $themeTitle;
    private $themeDescription;

    public function __construct($Theme_id, $themeTitle, $themeDescription)
    {
        $this->Theme_id = $Theme_id;
        $this->themeTitle = $themeTitle;
        $this->themeDescription = $themeDescription;
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
        return "Theme (Theme_id: {$this->Theme_id}, themeTitle: {$this->themeTitle}, themeDescription: {$this->themeDescription})";;
    }


    public function listThemes() {}
    public function getTheme($id) {}
    public function addTheme() {}
    public function editTheme() {}
    public function deleteTheme() {}
}
