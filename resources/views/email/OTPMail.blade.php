<!DOCTYPE html>
<html>

<head>
    <title>OTP Verification</title>
</head>

<body>
    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
        <div style="margin:50px auto;width:70%;padding:20px 0">

            <p style="font-size:1.1em">Hi,</p>
            <p>Thank you for joining. Use the following OTP to complete your sign-up procedures. OTP is valid for 5
                minutes:</p>
            <h2
                style="background: #00466a;margin: 0 auto;width: max-content;padding: 10px;color: #fff;border-radius: 4px;">
                {{ $otp }}</h2>
            <p style="font-size:0.9em;">Regards,<br />{{ config('app.name') }}</p>
        </div>
    </div>
</body>

</html>