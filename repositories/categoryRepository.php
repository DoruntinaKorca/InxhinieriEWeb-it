<?
include '../database/databaseConnection.php';

class categoryRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection= $conn->startConnection();
    }


    function insertCategory($category){
        $conn = $this->connection;
        $category_title= $category->getCategoryTitle();
        $category_img= $category->getCategoryImg();
        
        $sql = "INSERT INTO categories(category_title, category_img) VALUES (?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$category_title,$category_img]);
        echo "<script>alert('category added successfully') </script>";
    }




    function getAllCategories(){
        $conn= $this->connection;

        $sql = "SELECT * FROM categories LIMIT 9";
        $statement = $conn->query($sql);
        $categories = $statement->fetchAll();
        return $categories;
    }
 
    




    function deleteCategoryById($category_id){
        $conn = $this->connection;

        $sql = "DELETE FROM categories WHERE category_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$category_id]);
        echo "<script> alert('Category has been deleted successfully!') </script>";
    }
    


    
    function getUserById($category_id){
        $conn = $this->connection;
  
        $sql = "SELECT * FROM categories WHERE category_id='$category_id'";
        $statement=$conn->query($sql);
        $category = $statement->fetch();
  
        return $category;
      }

    
    function updateCategory($category_id,$category_title,$category_img){
        $conn = $this->connection;

        $sql = "UPDATE categories SET category_title=?,category_img=? where category_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$category_title,$category_img,$category_id]);
        echo "<script> alert('Category has been updated successfuly!') </script>";
    }

    function getCategories(){
        $conn= $this->connection;

        $sql = "SELECT * FROM categories LIMIT 3";
        $statement = $conn->query($sql);
        $categories = $statement->fetchAll();
        return $categories;
    }

}
?>