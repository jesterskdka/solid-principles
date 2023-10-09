<?php 
interface DBConnection implementsDbConnectionInterface 
{  
   public function connect();
}

class MYSQLConnection implements DbConnectionInterface 
{ public function connect(){
//Return the MySQL connection...
}
}

class PostgreSQLConnection implements DbConnectionInterface 
{ public function connect(){
//Return the MySQL connection...
}
}

clasdbs UserDB {
private $dBConnection;
public function __construct(DbConnectionInterfac $dBConnection) 
{ $this ->dbConnection = $dbConnection;
}
}

public function store (User $User) {
//Store The user into a database...
}
}

?>
