<?php
require_once 'koneksi.php';

class Contact {
    static function select() {
        global $conn;
        $result = $conn->query("SELECT * FROM db_contact");
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }

    static function insert($id, $no_hp, $nama_pemilik, $jenis_kelamin) {
        global $conn;
        $sql = "INSERT INTO db_contact (id, no_hp, nama_pemilik, jenis_kelamin) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $id, $no_hp, $nama_pemilik, $jenis_kelamin);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }    

    static function update($id, $no_hp, $nama_pemilik, $jenis_kelamin) {
        global $conn;
        $sql = "UPDATE db_contact SET no_hp = ?, nama_pemilik = ?, jenis_kelamin = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $no_hp, $nama_pemilik, $jenis_kelamin, $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function delete($id) {
        global $conn;
        $sql = "DELETE FROM db_contact WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}

?>
