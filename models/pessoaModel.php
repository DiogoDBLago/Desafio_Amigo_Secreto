<?php
class PessoaModel {
    private $db;

    public function __construct() {
        // Conexão com o banco de dados
        $this->db = new PDO('mysql:host=localhost;dbname=amigo_secreto', 'root', '');
    }

    public function buscarPessoas($termo) {
        $stmt = $this->db->prepare("SELECT * FROM pessoas WHERE nome LIKE ? OR email LIKE ?");
        $termo = "%" . $termo . "%"; 
        $stmt->execute([$termo, $termo]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getRandom() {
        $sql = "SELECT * FROM pessoas ORDER BY RAND() LIMIT 1";
        $stmt = $this->db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {
        $sql = "SELECT * FROM pessoas";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function exists($nome, $email) {
        $sql = "SELECT * FROM pessoas WHERE nome = :nome OR email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nome, $email) {
        $sql = "INSERT INTO pessoas (nome, email) VALUES (:nome, :email)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        return $stmt->execute();
    }

    public function getById($id) {
        $sql = "SELECT * FROM pessoas WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nome, $email) {
        $sql = "UPDATE pessoas SET nome = :nome, email = :email WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM pessoas WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
}
