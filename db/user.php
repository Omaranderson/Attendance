<?php

    class user
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertUser($username, $password)
        {
            try
            {
                $result = $this->getUserByUserName($username);

                if ($result['num'] > 0)
                {
                    return false;
                }
                else
                {
                    $new_password = md5($password.$username);

                    $sql = "INSERT INTO users(username, password)
                            VALUES (:user, :pass)";
                    
                    $stmt = $this->db->prepare($sql);

                    $stmt->bindparam(':user', $username);
                    $stmt->bindparam(':pass', $new_password);

                    $stmt->execute();
                    return true;
                }
            }
            catch(PDOException $e)
            {
                echo $e->getmessage();
                return false;
            }
        }

        public function getUser($username, $password)
        {
            try
            {
                $sql = "SELECT * FROM users WHERE username = :user AND password = :pass";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':user', $username);
                $stmt->bindparam(':pass', $password);
                $result = $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch(PDOException $e)
            {
                echo $e->getmessage();
                return false;
            }
        }


        public function getUserByUserName($username)
        {
            try
            {
                $sql = "SELECT COUNT(*) as num FROM users WHERE username = :user";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':user', $username);
                $result = $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch(PDOException $e)
            {
                echo $e->getmessage();
                return false;
            }
        }
    }

?>