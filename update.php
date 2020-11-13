<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
// 一意であるidをうけとる
$id = $_POST['id'];

// DBへのデータ保存
$task = new Task();
$task->update([$title, $contents, $id]);

// リダイレクト
header('location:index.php');
exit;
