<!DOCTYPE html>
<html>
<head>
    <title>Send Data to PHP</title>
</head>
<body>
    <button class="sendButton">Button 1</button>
    <button class="sendButton">Button 2</button>
    <button class="sendButton">Button 2</button>






    <!-- <script>
        // Get all elements with the "sendButton" class
        var buttons = document.querySelectorAll(".sendButton");

        // Add a click event listener to each button
        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Get the inner text of the clicked button
                var buttonText = this.innerText;
                alert(buttonText);

                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();

                // Define the PHP script URL and request method (POST or GET)
                var phpScript = "index1.php"; // Replace with your PHP script URL
                var method = "POST";

                // Configure the request
                xhr.open(method, phpScript, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                // Define the data to be sent to PHP
                var data = "buttonText=" + encodeURIComponent(buttonText); // Encode the text

                // Set up the callback function to handle the response
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response from PHP here (if needed)
                        console.log(xhr.responseText);
                    }
                };

                // Send the request with the data
                xhr.send(buttonText);
                window.location.href = "./index1.php";
            });
        });
    </script> -->


</body>
</html>
