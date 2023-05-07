<?php 
class IncidentsController extends Incident{
     
     public function __construct()
     {
          Auth::verify();
     
     }
     public function index(){
         $incidents = parent::index();

        require_once('views/all/header.php');
        require_once('views/all/sidebar.php');
	   require_once('views/all/nav.php');
	   require_once('views/incident/index.php');
        require_once('views/all/footer.php');
     }
     public function create(){
          $title = 'Crear nueva insidencia';
        require_once('views/all/header.php');
        require_once('views/all/sidebar.php');
	   require_once('views/all/nav.php');
	   require_once('views/incident/create.php');
        require_once('views/all/footer.php');
     }
     public function destroy(){
          $id = $_GET['id'];
          parent::delete($id);
          header('location:?c=incidents&m=index');
     }
     public function store_incident(){
            
               $table_number = intval($_POST['table_number']);
               $description_problem =$_POST['description_problem'];
               $priority = $_POST['priority'];
               $state = "pendiente";
               $date = date('y-m-d');
            
            parent::store($table_number, $description_problem, $priority,$state,$date);
            header('location:?c=incidents&m=index');
     }
     public function edit(){
          $incident = parent::find($_GET['id']);
          $title = 'Editar nueva insidencia';
          require_once('views/all/header.php');
          require_once('views/all/sidebar.php');
          require_once('views/all/nav.php');
          require_once('views/incident/edit.php');
          require_once('views/all/footer.php');
     }
     public function update_incident(){
           $data = array(
                $_POST['table_number'],
                $_POST['description_problem'],
                $_POST['priority'],
                $_POST['state'],
                $_GET['id'],
           );
           parent::update($data);
           header('location:?c=incidents&m=index');
     }
        
}

