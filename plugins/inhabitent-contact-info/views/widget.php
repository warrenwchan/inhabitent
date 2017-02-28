<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $phone ) ) > 0 ): ?>
    <p>
        <span class="phone" > 
            <i class="fa fa-phone" aria-hidden="true"></i>
            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        </span>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $email ) ) > 0 ): ?>
    <p>
        <span class="email" >
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </span>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $location ) ) > 0 ): ?>
    <p>
        <span class="location" >
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <?php echo $location; ?>
        </span>
    </p>
<?php endif; ?>