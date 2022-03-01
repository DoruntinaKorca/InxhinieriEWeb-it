<?

include '../database/databaseConnection.php';
class menuRepository{
      private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection=$conn->startConnection();
    }


    function insertMenu($menu){
        $conn = $this->connection;
        
        $menu_title = $menu->getTitle();
         $menu_price = $menu->getPrice();
         $menu_img = $menu->getImg();
         $menu_description=$menu->getDescription();

        $sql = "INSERT INTO menu(menu_title, menu_price,menu_img,menu_description) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$menu_title, $menu_price,$menu_img,$menu_description]);
        echo "<script>alert('Menu added successfully')</script>";

    }

    function getAllMenus(){

        $conn=$this->connection;

        $sql="SELECT * FROM menu LIMIT 6";

        $statement=$conn->query($sql);
        $menus=$statement->fetchAll();

        return $menus;
    }

    function deleteMenuById($menu_id){
        $conn = $this->connection;

        $sql = "DELETE FROM menu WHERE menu_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$menu_id]);

        echo "<script> alert('Menu has been deleted successfully!') </script>";
    }

    function getMenuById($menu_id){
        $conn=$this->connection;

        $sql="SELECT * FROM menu WHERE menu_id='$menu_id'";

        $statement = $conn->query($sql);
        $menu = $statement->fetch();

        return $menu;
    }

    function updateMenu($menu_id,$menu_title, $menu_price,$menu_img,$menu_description){
        $conn = $this->connection;

        $sql = "UPDATE menu SET menu_title=?,menu_price=?,menu_img=?,menu_description=? where menu_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$menu_title,$menu_price,$menu_img,$menu_description,$menu_id]);
        echo "<script> alert('Menu has been updated successfully!') </script>";
    }
}
?>