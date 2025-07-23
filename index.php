<?php
// مسیر فایل JSON
$dataFile = __DIR__ . 's.json';

// اگر فایل وجود نداشت، بسازش
if (!file_exists($data_put_contents($dataFile, json_encode([]));
}

// ذخیره اطلاعات جدید
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entry = [
        'headLeader' => $_POST['headLeader'],
        'username' => $_POST['username'],
        'description' => $_POST['description'],
        'registrar' => $_POST['registrar'],
        'salary' => $_POST['salary'],
        'status' => 'درحال بررسی',
        'time' => date('Y-m-d H:i:s')
    ];

    $entries = json_decode(file_get_contents($dataFile), true);
    $entries[] = $entry;
    file_put_contents($dataFile, json_encode($entries, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// خواندن اطلاعات
$entries = json_decode(file_get_contents($dataFile), true);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>ثبت حقوق کارکنان</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body { font-family: 'Vazirmatn', sans-serif; background: #f9f9f9; padding: 20px; direction: rtl; }
    h2 { color: #4CAF50; }
    .form-group { margin-bottom: 15px; }
    label { font-weight: bold; display: block; margin-bottom: 5px; }
    input, textarea, button {
      width: 100%; padding: 10px; border: 1px solid #ccc;
      border-radius: 6px; font-size: 16px; box-sizing: border-box;
    }
    button {
      background-color: #4CAF50; color: white; border: none;
      cursor: pointer; transition: background 0.3s;
    }
    button:hover { background-color: #45a049; }
    .entry {
      background: white; border: 1px solid #ddd;
      border-radius: 8px; padding: 15px; margin-bottom: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .entry strong { color: #4CAF50; }
    .entry small { color: #777; display: block; margin-top: 5px; }
    .status {
      display: inline-block; padding: 4px 8px;
      border-radius: 4px; font-size: 14px; margin-top: 5px;
    }
    .درحال\ بررسی { background: #ffeb3b; color: #000; }
    .انجام\ شده { background: #8bc34a; color: white; }
    .رد\ شود { background: #f44336; color: white; }
    @media (max-width: 600px) {
      body { padding: 10px; }
      input, textarea, button { font-size: 14px; }
    }
  </style>
</head>
<body>

  <h2>📝 فرم ثبت حقوق</h2>
  <form method="POST">
    <div class="form-group">
      <label>هد مربوطه:</label>
      <input type="text" name="headLeader" required>
    </div>

    <div class="form-group">
      <label>نام کاربری کارکن فکشن:</label>
      <input type="text" name="username" required>
    </div>

    <div class="form-group">
      <label>توضیحات و آرپی‌ها:</label>
      <textarea name="description" required></textarea>
    </div>

    <div class="form-group">
      <label>نام ثبت‌کننده:</label>
      <input type="text" name="registrar" required>
    </div>

    <div class="form-group">
      <label>مبلغ حقوق (تومان):</label>
      <input type="number" name="salary" required>
    </div>

    <button type="submit">📌 ثبت حقوق</button>
  </form>

  <hr>
  <h2>📋 لیست حقوق‌های ثبت‌شده</h2>
  <?php foreach (array_reverse($entries) as $e): ?>
    <div class="entry">
      <strong>هد:</strong> <?= htmlspecialchars($e['headLeader']) ?><br>
      <strong>کارکن:</strong> <?= htmlspecialchars($e['username']) ?><br>
      <strong>توضیحات:</strong> <?= nl2br(htmlspecialchars($e['description'])) ?><br>
      <strong>ثبت‌کننده:</strong> <?= htmlspecialchars($e['registrar']) ?><br>
      <strong>حقوق:</strong> <?= htmlspecialchars($e['salary']) ?> تومان<br>
      <span class="status <?= $e['status'] ?>"><?= $e['status'] ?></span>
      <small>🕒 <?= $e['time'] ?></small>
    </div>
  <?php endforeach; ?>

</body>
</html>
