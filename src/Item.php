<?php


class Item {
    private $id;
    private $price;
    private $description;
    private $availability;
    private $name;
    private $connection;
    private $img;
    
    public function __construct(mysqli $conn) {
        $this->connection=$conn;
        
    }
    
    function getImg() {
        return $this->img;
    }

    function getId() {
        return $this->id;
    }
    
    function getPrice() {
        return $this->price;
    }

    function getDescription() {
        return $this->description;
    }

    function getAvailability() {
        return $this->availability;
    }

    function getName() {

        return $this->name;
    }
    
    function setImg($img) {
        $this->img = $img;
    }

    function setPrice($price) {
        if ($price>0) {
            $this->price = $price;
        } else {
            return false;
        }
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setAvailability($availability) {
        $this->availability = $availability;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function loadDataFromDb() {
        
    }
    
    public function sellItem($quantity) {
        $this->availability-=$quantity;
    }
    
    public function buyItem($quantity) {
        $this->availability-=$quantity;
    }

    public function showAll() {
        $sql="SELECT*FROM Items LEFT JOIN itemsPictures ON Items.id=itemsPictures.Items_id";
        $conn=$this->connection;
        $result=mysqli_query($conn, $sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                include (__DIR__ . '../../items_show.php');
            }
        }
    }
    
    public function addItem($name, $description, $price, $availability) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);        
        $this->setAvailability($availability);
        $sql="INSERT INTO Items(itemName, description, price, availability) "
                . "VALUES ('$this->name', '$this->description', '$this->price', '$this->availability')";
        $conn=$this->connection;
        $conn->query($sql);
    }

    public function addImg($img, $name) {
        $this->setImg($img);
        $this->setName($name);
        $sql="INSERT INTO itemsPictures(url, Items_id) VALUES ('$this->img', '$this->name')";
        $conn=$this->connection;
        $conn->query($sql);
    }

    public function deleteItem($name) {
        $this->setName($name);
        $sql="DELETE FROM Item WHERE itemName='$this->name'";
        $conn=$this->connection;
        $result=$conn->query($sql);
        if($result!=FALSE) {
            echo "Przedmiot został usunięty";
        } else {
            echo "Blad podczas usuwania kina.<br>" . $conn->error;
        }
    }

    public function updateItem($name, $description, $price, $availability) {
        $this->setName($name);
        $this->setAvailability($availability);
        $this->setDescription($description);
        $this->setPrice($price);

    }

    
    // git remote add base mójlink
    // git pull base master
    //add
    //commit
    //git push origin master
    
    //symfony new coderslab 2.7
    
}   //ssh vagrant@192.168.33.22
//  hasło: vagrant
//   
    //cd /var/www/html ...
    //w folderze polecenie symfony new coderslab 2.7
    //php app/console server:run 0.0.0.0:8000
// i póżniej wchodzimy 192.168.33.22:8000

//
//    $name='wycasasfasfasfasf';
//    $description='dobrze wyciera';
//    $price=1;
//    $availability=4;
//
//    $item->addItem($name, $description, $price, $availability);


