<?php 
class Main{
	// Get All Men Products For Home
	public function getAllAppointments(){
		global $pdo;

		$query = $pdo->prepare('SELECT * FROM appointment  order by appointmentID desc LIMIT 4');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    public function logged_in(){
        return (isset($_SESSION['loggedin'])) ? true : false;
        }
    }
    ?>