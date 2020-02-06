<?
 class AdminDAO{
    private $con;
    public function __construct(){
        try{
            $this->con = Connection::getConnection();
        }catch(Exception $e){
            echo $e.getMessage()
        }
    }
    public function addPlanes(Planes $p){
        try{
            $stm =$this->con->prepare("INSERT INTO planes_nutri(nombre,descripcion) VALUES(?,?)");
            $stm->excute(array(
                $p->getNombre(),
                $p->getDescripcion()
            ));
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function updatePlanes(){
        try{
            $stm = $this->can->prepare("UPDATE planes_nutri"
            . "SET nombre= ?, descripcion= ?");
            $stm->excute();
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
 }
?>