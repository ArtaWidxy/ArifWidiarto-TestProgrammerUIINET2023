<?php require_once "db.php";
class user extends db {
	//perintah memasukkan data kedalam database
	public function insert($f,$l,$w,$c,$e){
		$query = "INSERT INTO users(first,last,work,city,email) VALUES(?,?,?,?,?) ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e])){
			echo "Submit Berhasil";
		}
	}
	public function get_row($id){
		$query = "SELECT * FROM users WHERE id = ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$id]);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			return $row;		
		}
	}

	//fungsi untuk menampilkan data terbaru, jika data ditambahkan, langsung muncul
	public function load(){
		$query = "SELECT * FROM users ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-responsive table-hover'><tr class='bg-light'><th>ID</th><th>First Name</th><th>Last Name</th><th>Occupation</th><th>City</th><th>Email</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id = $row['id'];
				$first = $row['first'];
				$last = $row['last'];
				$work = $row['work'];
				$city = $row['city'];
				$email = $row['email'];
				$out .="<tr><td>$id</td><td>$first</td><td>$last</td><td>$work</td><td>$city</td><td>$email</td>";
			} 
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-info text-center col-sm-5 mx-auto'>No records yet. its time to add new!</p>";
		}
		return $out;
		return $out;
	}
}