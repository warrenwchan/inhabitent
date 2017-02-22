<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $monday_friday ) ) > 0 ): ?>
    <p>
        <span class="day-of-week" > Monday to Friday: <?php echo $monday_friday; ?> </span>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $saturday ) ) > 0 ): ?>
    <p>
        <span class="day-of-week" > Saturday: <?php echo $saturday; ?> </span>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $sunday ) ) > 0 ): ?>
    <p>
        <span class="day-of-week" > Sunday: <?php echo $sunday; ?> </span>
    </p>
<?php endif; ?>