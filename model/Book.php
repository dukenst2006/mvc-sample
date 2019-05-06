<?php
/**
 * Created by PhpStorm.
 * User: Dukens Thelemaque
 * Date: 6/5/2019
 * Time: 3:06 AM
 */


class Book {
	public $title;
	public $author;
	public $description;
	
	public function __construct($title, $author, $description)  
    {  
        $this->title = $title;
	    $this->author = $author;
	    $this->description = $description;
    } 
}

?>