<?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
    <div <?= $options['wrapperAttrs'] ?> >
    <?php endif; ?>
<?php endif; ?>

    <?php if ($showLabel && $options['label'] !== false): ?>
    <?= Form::label($name, $options['label'], $options['label_attr']) ?>
    <?php endif; ?>

    <?php if ($showField): ?>
    <?= Form::textarea($name, $options['default_value'], $options['attr']) ?>
    <?php endif; ?>

    <?php if ($showError && isset($errors)): ?>
        <?php foreach ($errors->get(array_get($options, 'real_name', $name)) as $err): ?>
            <div <?= $options['errorAttrs'] ?>><?= $err ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

<?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
    </div>
    <?php endif; ?>
<?php endif; ?>
