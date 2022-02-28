<?
class menu{
    private $menu_title;
    private $menu_price;
    private $menu_img;
    private $menu_description;

    function __construct($menu_title, $menu_price,$menu_img,$menu_description){
        $this->menu_title=$menu_title;
        $this->menu_price=$menu_price;
        $this->menu_img=$menu_img;
        $this->menu_description=$menu_description;
    }

    function getTitle(){
      return  $this->menu_title;
    }
    function getPrice(){
        return  $this->menu_price;
      }
      function getImg(){
        return  $this->menu_img;
      }
      function getDescription(){
        return  $this->menu_description;
      }
}
?>