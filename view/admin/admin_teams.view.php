<h1>
    Mange Teams
</h1>

<a href="new.php"><button class="btn btn-default">New Team</button></a>

<table>
    <?php foreach($teams as $team): ?>
        <tr>
            <td>
                <a href="../../club_page.php?club_id=<?php echo ($team['id']); ?>">
                    <?php echo $team['name']; ?>
                </a>
            </td>
            <td>
                <a href="edit.php?club_id=<?php echo $team['id'] ?>">
                    Edit
                </a>
            </td>
            <td>
                Delete
            </td>
        </tr>
    <?php endforeach; ?>
</table>