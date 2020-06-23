<?php
/*
 * Functions to interface with `user` table
 */
// function getAllUsers()
// {
//     global $db;

//     try {
//         $query = "SELECT * FROM users";
//         $query = $db->prepare($query);
//         $query->execute();
//         return $query->fetchAll();
//     } catch (\Exception $e) {
//         throw $e;
//     }
// }
function findUserByUsername($username) {
    global $db;

    try {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch();

    } catch (\Exception $e) {
        throw $e;
    }
}

function findUserById($userId)
{
    global $db;

    try {
        $query = "SELECT * FROM users WHERE id = :userId";
        $query = $db->prepare($query);
        $query->bindParam(':userId', $userId);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;

    } catch (\Exception $e) {
        throw $e;
    }
}
function createUser($username, $password)
{
    global $db;

    try {
        $query = "INSERT INTO users (username, password, role_id) VALUES (:username, :password, 2)";
        $query = $db->prepare($query);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        return findUserByUsername($username);
    } catch (\Exception $e) {
        throw $e;
    }
}
function updatePassword($password, $userId)
{
    global $db;

    try {
        $query = 'UPDATE users SET password = :password WHERE id = :userId';
        $query = $db->prepare($query);
        $query->bindParam(':password', $password);
        $query->bindParam(':userId', $userId);
        $query->execute();
        if ($query->rowCount() > 0) {
          return true;
        } else {
          return false;
        }
    } catch (\Exception $e) {
        throw $e;
    }

    return true;
}

