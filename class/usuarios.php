<?php
class crud
{
    private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }
    //Muestra los datos en la tabla
    public function dataview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute() > 0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edit_users.php?edit_id=<?php echo $row['id'] ?>"> Editar</a>
                </td>
                <td>
                    <a href="delete_users.php?delete_id=<?php echo $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                </td>
            </tr>

<?php

        }
    }

    public function update($id, $username, $email)
    {
        try {
            $stmt = $this->db->prepare("UPDATE usuarios SET username=:username, email=:email
            WHERE id=:id");
            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getID($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id=:id");
        $stmt->execute(array(":id" => $id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    
}

public function delete($id)
{
    $stmt = $this->db->prepare("DELETE FROM  usuarios WHERE id=:id");
    $stmt->bindparam(":id ,$id");
    $stmt->execute ();
    return true;
}
}
