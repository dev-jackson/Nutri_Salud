<?
 class ClientDAO{

    private $con; 
    public function __construct(){
        try{
            $this->$con = Connection::getConnection();
        }catch(Exception $e){
            echo $e.getMessage()
        }
    }
    public function showAll(){
        try{
            $stm = $this->con->prepare("SELECT * FROM userAdmin");
            $stm->excute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            
        }
    }
    public function getClient($id){
        try{
            $stm = $this->con->prepare("SELECT *FROM userAdmin WHERE admin_id= ?");
            $stm->excute(array($id));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
 }
?>