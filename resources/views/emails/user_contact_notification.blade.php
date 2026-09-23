<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Contacting Pearlcon</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px; color: #13202f; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e1e8ed; }
        .header { background: #0a1626; color: #ffffff; padding: 24px; text-align: center; border-bottom: 4px solid #e98423; }
        .header h2 { margin: 0; font-size: 22px; font-weight: 600; color: #ffffff; }
        .header p { margin: 6px 0 0; color: #8b9aae; font-size: 14px; }
        .content { padding: 30px 24px; }
        .message-box { background: #f8fafc; border-left: 4px solid #e98423; border-radius: 6px; padding: 18px; margin-top: 15px; font-size: 14px; line-height: 1.6; color: #2d3748; white-space: pre-wrap; }
        .footer { background: #eaedf1; padding: 16px; text-align: center; font-size: 12px; color: #718096; }
        .contact-details { margin-top: 20px; padding: 16px; background: #fafbfc; border-radius: 8px; border: 1px solid #edf2f7; font-size: 13px; line-height: 1.6; color: #4a5568; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Pearlcon Business Services Ltd</h2>
            <p>Your Supply and Sourcing Partner</p>
        </div>
        <div class="content">
            <p style="font-size: 16px; margin-top: 0;">Dear <strong>{{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</strong>,</p>
            <p style="font-size: 14px; color: #4a5568; line-height: 1.6;">
                Thank you for contacting Pearlcon Business Services Ltd. We have received your inquiry and a member of our team will review your message and respond as soon as possible.
            </p>

            <div style="margin-top: 20px;">
                <strong style="font-size: 13px; color: #5b6672; text-transform: uppercase; letter-spacing: 0.5px;">Summary of your message:</strong>
                <div class="message-box">{{ $contactMessage->message }}</div>
            </div>

            <div class="contact-details">
                <strong style="color: #0a1626;">Pearlcon Business Services Ltd</strong><br>
                Address: 38F Chigwell Lane, Oak Hill IND. EST.
Loughton. IG10 3NY<br>
                Phone: <a href="tel:+441234440530" style="color: #e98423; text-decoration: none;">+44 1234 440 530</a><br>
                Email: <a href="mailto:sales@pearlcon.com" style="color: #e98423; text-decoration: none;">sales@pearlcon.com</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Pearlcon Business Services Ltd. All rights reserved.
        </div>
    </div>
</body>
</html>
