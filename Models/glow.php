                                                        

<?php

class glow{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM product");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;

    }
    



    static public function getProduct($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM product WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $product = $statement->fetch(PDO::FETCH_OBJ);
            return $product;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    

    // static public function add($data)
    // {
    //     $stmt = DB::connect()->prepare("INSERT INTO product(name,image,description,statut,prix) VALUES (:name,:image,:description,:statut,:prix)");
    //     $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
    //     $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
    //     $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
    //     $stmt->bindParam(':statut', $data['statut'], PDO::PARAM_STR);
    //     $stmt->bindParam(':prix', $data['prix'], PDO::PARAM_STR);
    //     // die(print_r($data));

        


    //     if ($stmt->execute()) {
    //         return 'ok';


    //     } else {
    //         return 'error';
    //     }
    //     $stmt->close();
    //     $stmt = null;
    // }

    static public function add($data)
    {
        foreach ($data as $product) {
            $stmt = DB::connect()->prepare("INSERT INTO product(name,image,description,statut,prix) VALUES (:name,:image,:description,:statut,:prix)");
            $stmt->bindParam(':name', $product['name'], PDO::PARAM_STR);
            $stmt->bindParam(':image', $product['image'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $product['description'], PDO::PARAM_STR);
            $stmt->bindParam(':statut', $product['statut'], PDO::PARAM_STR);
            $stmt->bindParam(':prix', $product['prix'], PDO::PARAM_STR);
            $stmt->execute();
            // $stmt->close();
            $stmt = null;
        }
        return 'ok';
    }

    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE product SET name = :name,image = :image,description = :description,statut = :statut,prix = :prix WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':statut', $data['statut']);
        $stmt->bindParam(':prix', $data['prix']);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }



    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM product WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {

                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
                                                        
                                                    