<?php require APPROOT . '/views/inc/components/header.php'; ?>
        <h1>Hel</h1>

        <?php foreach($data['users'] as $user) : ?>
            <li><?php echo $user->name; ?> - <?php echo $user->age; ?></li>
        <?php endforeach; ?>
<?php require APPROOT . '/views/inc/components/footer.php'; ?>
    