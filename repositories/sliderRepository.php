<?
include '../database/databaseConnection.php';

class sliderRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;

        $this->connection= $conn->startConnection();
    }

    function insertSlider($imgSlider){
        $conn = $this->connection;
        $slider_title = $imgSlider->getSliderTitle();
        $slider_img = $imgSlider->getSliderImg();
        
        $sql = "INSERT INTO imgslider(slider_title, slider_img) VALUES (?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$slider_title,$slider_img]);
        echo "<script>alert('slider u shtua me sukses') </script>";
    }

    function getAllSliders(){
        $conn= $this->connection;

        $sql = "SELECT * FROM imgslider";
        $statement = $conn->query($sql);
        $sliders = $statement->fetchAll();
        return $sliders;
    }
    

}
?>