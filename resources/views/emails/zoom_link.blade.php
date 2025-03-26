<p>Dear {{ $name }},</p>

<p>Thank you for booking a session! Here are your appointment details:</p>

<p><strong>Date:</strong> {{ $appointmentDate }}</p>
<p><strong>Time:</strong> {{ $appointmentTime }}</p>

<p>Join your Zoom session using the following link:</p>
<p><a href="{{ $zoomLink }}">{{ $zoomLink }}</a></p>

<p>Looking forward to seeing you!</p>

<p>Best regards,<br>Healthy Smiles Team</p>
