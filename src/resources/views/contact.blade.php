<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>

<body>

    <div style="padding: 2rem 4rem">
        <form action="{{ route('contact.store') }}" method="post" style="width: 250px">
            @csrf

            <h2>Contact Us Form</h2>

            <label style="letter-spacing: 1px" for="input-name">Name</label>
            <input id="input-name" type="text" name="name" 
                placeholder="Enter your name" 
                style="margin-bottom: 1rem; display: block; width: 100%;">

            <label style="letter-spacing: 1px" for="input-email">Email</label>
            <input id="input-email" type="email" name="email" 
                placeholder="Enter email address" 
                style="margin-bottom: 1rem; display: block; width: 100%;">

            <label style="letter-spacing: 1px" for="input-message">Message</label>
            <textarea name="message" id="input-message" rows="3" 
                placeholder="Enter your message" 
                style="margin-bottom: 1rem; display: block; width: 100%;"></textarea>
            
            <input type="submit" value="Submit">
    
        </form>
    </div>

</body>

</html>
