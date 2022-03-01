<?
class imgSlider{
    private $slider_title;
    private $slider_img;

    function __construct($slider_title, $slider_img){
        $this->slider_title=$slider_title;
        $this->slider_img=$slider_img;
    }



    function getSliderTitle(){
        return $this->slider_title;
    }


    
    function getSliderImg(){
        return $this->slider_img;
    }
}
?>