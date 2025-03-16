<?php
// Form verilerini al
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// E-posta gönderimi için başlıkları ayarla
$to = "info@siteadi.com"; // Bu adresi kendi e-posta adresinizle değiştirin
$email_subject = "Yeni İletişim Formu Mesajı: " . $subject;
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// E-posta içeriğini oluştur
$email_content = "
<html>
<head>
    <title>Yeni İletişim Formu Mesajı</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f8f9fa; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Yeni İletişim Formu Mesajı</h2>
        </div>
        <div class='content'>
            <p><strong>İsim:</strong> $name</p>
            <p><strong>E-posta:</strong> $email</p>
            <p><strong>Telefon:</strong> $phone</p>
            <p><strong>Konu:</strong> $subject</p>
            <h3>Mesaj:</h3>
            <p>$message</p>
        </div>
        <div class='footer'>
            <p>Bu e-posta iletişim formundan otomatik olarak gönderilmiştir.</p>
        </div>
    </div>
</body>
</html>
";

// E-postayı gönder
$mail_sent = mail($to, $email_subject, $email_content, $headers);

// Yedek olarak WhatsApp numarasına bildirim gönder
$whatsapp_message = "Yeni İletişim Formu Mesajı:\n\n";
$whatsapp_message .= "İsim: $name\n";
$whatsapp_message .= "E-posta: $email\n";
$whatsapp_message .= "Telefon: $phone\n";
$whatsapp_message .= "Konu: $subject\n\n";
$whatsapp_message .= "Mesaj:\n$message";

// WhatsApp API entegrasyonu buraya eklenebilir

// JSON yanıtı oluştur
$response = array(
    'success' => $mail_sent,
    'message' => $mail_sent ? 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.' : 'Mesaj gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.'
);

// JSON yanıtını döndür
header('Content-Type: application/json');
echo json_encode($response);