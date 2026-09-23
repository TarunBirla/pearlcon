<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Inquiry</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f8; margin: 0; padding: 20px; color: #13202f; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e1e8ed; }
        .header { background: #0a1626; color: #ffffff; padding: 24px; text-align: center; border-bottom: 4px solid #e98423; }
        .header h2 { margin: 0; font-size: 22px; font-weight: 600; color: #ffffff; }
        .header p { margin: 6px 0 0; color: #8b9aae; font-size: 14px; }
        .content { padding: 30px 24px; }
        .info-card { background: #f8fafc; border-left: 4px solid #e98423; padding: 16px 20px; border-radius: 6px; margin-bottom: 24px; }
        .info-row { display: flex; margin-bottom: 12px; border-bottom: 1px dashed #e2e8f0; padding-bottom: 10px; }
        .info-row:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .label { width: 140px; font-weight: 600; color: #5b6672; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; }
        .value { flex: 1; font-size: 15px; color: #0a1626; font-weight: 500; }
        .message-box { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px; margin-top: 10px; font-size: 14px; line-height: 1.6; color: #2d3748; white-space: pre-wrap; }
        .footer { background: #eaedf1; padding: 16px; text-align: center; font-size: 12px; color: #718096; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>Pearlcon Business Services Ltd - Admin Notification</p>
        </div>
        <div class="content">
            <p style="font-size: 15px; margin-top: 0;">Hello Admin,</p>
            <p style="font-size: 14px; color: #4a5568;">You have received a new contact message from the website contact page. Details below:</p>
            
            <div class="info-card">
                <div class="info-row">
                    <div class="label">Sender Name:</div>
                    <div class="value"><strong>{{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</strong></div>
                </div>
                <div class="info-row">
                    <div class="label">Email Address:</div>
                    <div class="value"><a href="mailto:{{ $contactMessage->email }}" style="color: #e98423; text-decoration: none;">{{ $contactMessage->email }}</a></div>
                </div>
                <div class="info-row">
                    <div class="label">Phone Number:</div>
                    <div class="value"><a href="tel:{{ $contactMessage->phone }}" style="color: #0a1626; text-decoration: none;">{{ $contactMessage->phone }}</a></div>
                </div>
                <div class="info-row">
                    <div class="label">Submitted At:</div>
                    <div class="value">{{ $contactMessage->created_at ? $contactMessage->created_at->format('d M Y, h:i A') : date('d M Y, h:i A') }}</div>
                </div>
            </div>

            <div style="margin-top: 20px;">
                <div class="label" style="margin-bottom: 8px;">Message Content:</div>
                <div class="message-box">{{ $contactMessage->message }}</div>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Pearlcon Business Services Ltd. Automated System Notification.
        </div>
    </div>
</body>
</html>
