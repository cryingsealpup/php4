<?php
$user = "root";
$pass = "";
$dbh = new PDO('sqlite:mydb.sq3', $user, $pass);
//$dbh->exec("CREATE TABLE user(host TEXT,user TEXT)");

try {
    $sql = "INSERT INTO user VALUES('localhost','Ivan')";
    $dbh->exec($sql) or die(print_r($dbh->errorInfo(), true));
    $sql = "INSERT INTO user VALUES('localhost','Vasiliy')";
    $dbh->exec($sql);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

foreach ($dbh->query('SELECT user,host from user') as $row) {
    echo "<pre>";
    print_r($row);
    echo "</pre><hr>";
}
$dbh = new PDO('sqlite:mydb.sq3', $user, $pass);
foreach ($dbh->query('SELECT user,host from user') as $row) {
    echo "<pre>";
    print_r($row);
    echo "</pre><hr>";
}

$stmt = $dbh->query('SELECT user,host from user');
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<pre>";
print_r($row);
echo "</pre><hr>";
}

//$dbh = new PDO('sqlite:mydb2.sq3', $user, $pass);
$stmt = $dbh->query('SELECT user,host from user');
$arrObj= $stmt->fetchAll(PDO::FETCH_CLASS,'User');
foreach ($arrObj as $obj){
echo $obj-> getParams(),"<hr>";
}
class User {
public $user, $host;
function getParams(){
return ($this->user."|".$this->host);
}
}

$host = '%';
$sth = $dbh->prepare('SELECT user,host
FROM user
WHERE host = :host');
$sth->bindParam(':host', $host,PDO::PARAM_STR,1);
$sth->execute();
$result = $sth->fetchAll();
echo "<pre>",print_r($result),"</pre>";
