<?php

class Main
{
    protected string $title;
    protected string $text;

    public function __construct($titleP, $textP)
    {
        $this->title = $titleP;
        $this->text = $textP;
    }
    public function getTitle()
    {
        return "<h3>The title is:{$this->title}</h3><br/>";
    }
    public function getText()
    {
        return "<h3>The text is: {$this->text}</h3><br/>";
    }
}
class Ads extends Main
{
    public function __construct($titleP, $textP)
    {
        parent::__construct($titleP,$textP);
        
    }
     public function getTitle()
    {
        $title = strtoupper($this->title);
        return "<h3>The title is: $title</h3><br/>";
    }
    public function getText()
    {
        $text = strtoupper($this->text);
        return "<h3>The text is: $text</h3><br/>";
    }
    

}
class Article extends Main
{
     public bool $breakingNews;
     public function __construct($titleP, $textP, $breakingNewsP = false)
    {
        parent::__construct($titleP,$textP);
        $this->breakingNews = $breakingNewsP;
        
    }
      public function getTitle()
    {
        if($this->breakingNews){
            return "<h3>BREAKING: {$this->title}</h3>";
        }else{
            return "<h3>{$this->title}</h3>";
        }
    }
    
 
}
class Vacancy extends Main
{
      public function __construct($titleP, $textP)
    {
        parent::__construct($titleP,$textP);
        
    }
      public function getTitle()
    {
        return "<h3>Apply now for {$this->title}</h3><br/>";
    }
   

}








?>