<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New contact form submission</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0; width: 100%; background-color: #eef2f7; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #eef2f7; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 40px 16px;">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 600px; border-collapse: collapse;">
                    {{-- Header --}}
                    <tr>
                        <td style="background: linear-gradient(135deg, #1e3a5f 0%, #2f7fd4 55%, #7eb8f0 100%); border-radius: 16px 16px 0 0; padding: 32px 36px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td>
                                        <img src="{{ rtrim(config('app.url'), '/') }}/images/logo.png" alt="Stackxis" width="120" style="display: block; border: 0; outline: none; text-decoration: none; height: auto; max-width: 120px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 24px;">
                                        <p style="margin: 0 0 8px; font-size: 11px; font-weight: 600; letter-spacing: 0.18em; text-transform: uppercase; color: rgba(255, 255, 255, 0.75);">
                                            New enquiry
                                        </p>
                                        <h1 style="margin: 0; font-size: 26px; line-height: 1.25; font-weight: 700; color: #ffffff;">
                                            Contact form submission
                                        </h1>
                                        <p style="margin: 12px 0 0; font-size: 15px; line-height: 1.6; color: rgba(255, 255, 255, 0.88);">
                                            Someone reached out through the Stackxis website.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Body --}}
                    <tr>
                        <td style="background-color: #ffffff; padding: 36px; border-left: 1px solid #e2e6ed; border-right: 1px solid #e2e6ed;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: collapse;">
                                @foreach ([
                                    'Name' => $submission['name'],
                                    'Business' => $submission['business_name'] ?: 'Not provided',
                                    'Email' => $submission['email'],
                                    'Phone' => $submission['phone'],
                                    'Project type' => $submission['project_type'],
                                ] as $label => $value)
                                    <tr>
                                        <td style="padding: 0 0 14px; border-bottom: 1px solid #eef2f7;">
                                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: collapse;">
                                                <tr>
                                                    <td width="130" valign="top" style="padding: 14px 0; font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #2f7fd4;">
                                                        {{ $label }}
                                                    </td>
                                                    <td valign="top" style="padding: 14px 0; font-size: 15px; line-height: 1.5; color: #1a1f29; word-break: break-word;">
                                                        @if ($label === 'Email')
                                                            <a href="mailto:{{ $value }}" style="color: #1e3a5f; text-decoration: none; font-weight: 600;">{{ $value }}</a>
                                                        @elseif ($label === 'Phone')
                                                            <a href="tel:{{ preg_replace('/\s+/', '', $value) }}" style="color: #1a1f29; text-decoration: none;">{{ $value }}</a>
                                                        @else
                                                            {{ $value }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top: 24px; border-collapse: collapse;">
                                <tr>
                                    <td>
                                        <p style="margin: 0 0 10px; font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #2f7fd4;">
                                            Message
                                        </p>
                                        <div style="background-color: #f5f7fa; border: 1px solid #e2e6ed; border-left: 4px solid #2f7fd4; border-radius: 12px; padding: 18px 20px;">
                                            <p style="margin: 0; font-size: 15px; line-height: 1.7; color: #1a1f29; white-space: pre-wrap;">{{ $submission['message'] }}</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top: 32px; border-collapse: collapse;">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $submission['email'] }}?subject={{ rawurlencode('Re: Your Stackxis enquiry') }}"
                                           style="display: inline-block; background-color: #1e3a5f; color: #ffffff; font-size: 14px; font-weight: 600; line-height: 1; text-decoration: none; padding: 14px 28px; border-radius: 999px; mso-padding-alt: 0;">
                                            <!--[if mso]><i style="letter-spacing: 28px; mso-font-width: -100%; mso-text-raise: 22pt;">&nbsp;</i><![endif]-->
                                            <span style="mso-text-raise: 11pt;">Reply to {{ $submission['name'] }}</span>
                                            <!--[if mso]><i style="letter-spacing: 28px; mso-font-width: -100%;">&nbsp;</i><![endif]-->
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #f5f7fa; border: 1px solid #e2e6ed; border-top: 0; border-radius: 0 0 16px 16px; padding: 24px 36px;">
                            <p style="margin: 0 0 6px; font-size: 13px; line-height: 1.6; color: #5c6678; text-align: center;">
                                This message was sent from the contact form on
                                <a href="{{ rtrim(config('app.url'), '/') }}" style="color: #2f7fd4; text-decoration: none; font-weight: 600;">stackxis.com</a>.
                            </p>
                            <p style="margin: 0; font-size: 12px; line-height: 1.6; color: #8b95a5; text-align: center;">
                                Stackxis &middot; hello@stackxis.com
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
