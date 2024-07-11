<?php
//__DIR__は現在のファイルのディレクトリを表すマジック定数で、スクリプトの実行場所に依存しない絶対パスを取得するために使用される
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
// プロジェクトのルートディレクトリにある.envファイルを読み込んで$_ENVスーパーグローバル配列に格納する
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];

try {
    $db = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $conn = new PDO($db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}