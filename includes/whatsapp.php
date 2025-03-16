<?php
$whatsapp_text = isset($lang['whatsapp_text']) ? $lang['whatsapp_text'] : 'İletişime Geçin';
$whatsapp_greeting = isset($lang['whatsapp_greeting']) ? $lang['whatsapp_greeting'] : 'Merhaba, ürünleriniz hakkında bilgi almak istiyorum.';
?>
<a href="https://wa.me/905301111111?text=<?php echo urlencode($whatsapp_greeting); ?>" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span class="whatsapp-text"><?php echo $whatsapp_text; ?></span>
</a> 