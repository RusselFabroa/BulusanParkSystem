Hello {{$email_data['name']}}
<br><br>
Welcome to our Family!
<br>
Please click the link below to verify your email and activate your account!
<br><br>
<a href="http://127.0.0.1:8000/verify-admins?code={{$email_data['verification_code']}}">Click Here!<a>

        <br><br>
        Thank You!
        <br>
