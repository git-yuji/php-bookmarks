<?php

declare(strict_types=1);

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$title = '';
$url = '';
$category = '';
$note = '';

if ($submitted) {
    $title = trim((string) ($_POST['title'] ?? ''));
    $url = trim((string) ($_POST['url'] ?? ''));
    $category = (string) ($_POST['category'] ?? '');
    $note = trim((string) ($_POST['note'] ?? ''));
}

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Bookmarks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header class="page-header">
            <p class="eyebrow">BOOKMARK MANAGER</p>
            <h1>My Bookmarks</h1>
            <p>お気に入りのWebサイトを保存するアプリです。</p>
        </header>

        <section class="form-section" aria-labelledby="form-heading">
            <h2 id="form-heading">ブックマークを登録</h2>

            <form method="post">
                <div class="form-field">
                    <label for="title">タイトル</label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        maxlength="100"
                        placeholder="例：PHP公式サイト"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="url">URL</label>
                    <input
                        id="url"
                        name="url"
                        type="url"
                        placeholder="https://example.com"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="category">カテゴリー</label>
                    <select id="category" name="category">
                        <option value="learning">学習</option>
                        <option value="work">仕事</option>
                        <option value="tool">ツール</option>
                        <option value="other">その他</option>
                    </select>
                </div>

                <div class="form-field">
                    <label for="note">メモ</label>
                    <textarea
                        id="note"
                        name="note"
                        rows="4"
                        maxlength="500"
                        placeholder="このサイトを保存する理由など"
                    ></textarea>
                </div>

                <button type="submit">登録する</button>
            </form>
        </section>

        <?php if ($submitted): ?>
            <section class="result-section" aria-labelledby="result-heading">
                <h2 id="result-heading">受け取った内容</h2>

                <dl>
                    <div>
                        <dt>タイトル</dt>
                        <dd><?= escape($title) ?></dd>
                    </div>
                    <div>
                        <dt>URL</dt>
                        <dd><?= escape($url) ?></dd>
                    </div>
                    <div>
                        <dt>カテゴリー</dt>
                        <dd><?= escape($category) ?></dd>
                    </div>
                    <div>
                        <dt>メモ</dt>
                        <dd><?= escape($note) ?></dd>
                    </div>
                </dl>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>
