<?php
include_once "BaseModel.php";

class ProductModel extends BaseModel
{
    protected $table = "products";

    public function stord($request)
    {
        $sql = "insert into $this->table (name,sectors,price,quantily,description) values (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$request['name']);
        $stmt->bindParam(2,$request['sectors']);
        $stmt->bindParam(3,$request['price']);
        $stmt->bindParam(4,$request['quantily']);
        $stmt->bindParam(5,$request['description']);
        $stmt->execute();
    }

    public function update($request)
    {
        $sql = "update $this->table set name=?,sectors=?,price=?,quantily=?,description=? where id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$request['name']);
        $stmt->bindParam(2,$request['sectors']);
        $stmt->bindParam(3,$request['price']);
        $stmt->bindParam(4,$request['quantily']);
        $stmt->bindParam(5,$request['description']);
        $stmt->bindParam(6,$request['id']);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
