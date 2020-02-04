<?php 
class Main{
	
	//fetch user data
	public function getAppointmentDetails(){
		global $pdo;

		$query = $pdo -> prepare('SELECT * FROM appointment ');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
    }

//fetch patient ids
public function getPatientID(){
	global $pdo;

	$query = $pdo -> prepare('SELECT patientID FROM patient ');
	$query->execute();

	return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	//fetch doctor id
	public function getDoctorID(){
		global $pdo;

		$query = $pdo -> prepare('SELECT doctorID FROM doctor ');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		//fetch department ids
		public function getDepartmentID(){
			global $pdo;
	
			$query = $pdo -> prepare('SELECT departmentID FROM department ');
			$query->execute();
	
			return $query->fetchAll(PDO::FETCH_ASSOC);
			}
			public function getPatientData(){
				global $pdo;
		
				$query = $pdo -> prepare("SELECT * FROM patient WHERE email='$_SESSION[email]' ");
				$query->execute();
		
				return $query->fetchAll(PDO::FETCH_ASSOC);
				}
			public function patientLogged_in(){
				return (isset($_SESSION['loggedin'])) ? true : false;
	 }
		}
?>