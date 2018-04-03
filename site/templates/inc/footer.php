<?php
    const OWNER_EMAIL = 'gangesvara108@gmail.com';
    const OWNER_SKYPE = 'Александр Сангаван';
    const OWNER_WHATSAPP = '+371 28920360';
?>

<footer>
    <ul>
        <li>
            <a href="#"><img src="<?= $config->urls->templates?>img/email.png" style="width:65px;"></a>
            <p><span style="color: #f5b01c;">Email</span>: <?=OWNER_EMAIL; ?></p>
        </li>
        <li>
            <a href="#"><img src="<?= $config->urls->templates?>img/skype.png"></a>
            <p><span style="color: #f5b01c;">Skype</span>: <?=OWNER_SKYPE; ?></p>
        </li>
        <li>
            <a href="#"><img src="<?= $config->urls->templates?>img/whatsapp.png"></a>
            <p><span style="color: #f5b01c;">WhatsApp</span>: <?=OWNER_WHATSAPP; ?></p>
        </li>
    </ul>
</footer>