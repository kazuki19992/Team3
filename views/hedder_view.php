<header>
    <?php require('./views/nav_menu.php'); ?>
    <table border="0">
        <tr border="0">
            <td><center><a href="#" class="header_lnk"><i class="fas fa-star fa-2x"></i><br>お気に入り</a></center></td>
            <td><center><a href="./search.php" class="header_lnk"><i class="fas fa-search fa-2x"></i><br>検索</a></center></td>
            <td><center><div class="user_name"><?php echo html_escape($member['name']); ?></div><a href="./logout.php" class="header_lnk">ログアウト</a></center></td>
        </tr>
    </table>
</header>