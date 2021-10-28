<div>
    <h1 style="text-align: center"><?php echo $page_subtitle ?></h1>
    <table border="1" width="100%">
        <tr>
            <?php foreach($lists as $key => $val) : ?>
            <td><?php echo $val ?></td>
            <?php endforeach?>
        </tr>
    </table>
</div>