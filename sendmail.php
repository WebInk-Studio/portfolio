if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
    ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $ui-design = $_POST["ui-design"];
        $website-design = $_POST["website-design"];
        $app-design = $_POST["app-design"];
        $pencil-sketch = $_POST["pencil-sketch"];

        $to = "himanshuc.business@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}\nUI Design: {$ui-design}\nWebsite Design: {$website-design}\nApp Design: {$app-design}\nPencil Sketch: {$pencil-sketch}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}