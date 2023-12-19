<?php
    class DBConnection {
        private static $conn;
    
        public static function getDBConnection() {
            if (!self::$conn) {
                self::$conn = new mysqli("localhost", "root", "", "cleon");
                if (self::$conn->connect_error) {
                    die("Koneksi gagal: " . self::$conn->connect_error);
                }
            }
            return self::$conn;
        }
    }
  