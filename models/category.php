<?
class category{
    private $category_title;
    private $category_img;

    function __construct($category_title, $category_img){
        $this->category_title=$category_title;
        $this->category_img=$category_img;
    }



    function getCategoryTitle(){
        return $this->category_title;
    }


    
    function getCategoryImg(){
        return $this->category_img;
    }
}
?>