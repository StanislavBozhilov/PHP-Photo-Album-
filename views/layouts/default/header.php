<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/content/styles.css" />
    <title>
        <?php if (isset($this->title)) echo htmlspecialchars($this->title) ?>
    </title>
</head>

<body>
    <div id="wrapper">
        <header>
            <a href="/"><img src="/content/images/gallery-icon.png"></a>
            <ul>
                <li><a href="/"><span>Home</span></a></li>
                <li><a href="/category"><span>Categories</span></a></li>
                <li><a href="/album"><span>Albums</span></a></li>
                <li><a href="/photo"><span>Photos</span></a></li>
            </ul>
            <?php if ($this->isLoggedIn) : ?>
                <span id="logged-in-info">
                <span>Hello, <?php echo htmlspecialchars($_SESSION['username']) ?></span>
                <form action="/account/logout">
                    <input type="submit" value="Logout"/>
                </form>
            </span>
            <?php endif; ?>
        </header>
<hr>
        <?php include('messages.php'); ?>