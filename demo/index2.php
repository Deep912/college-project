<button onClick="sendData()">Send Data</button>
<script>
function sendData() {
    var data = {
        name: "Nathan",
        email: "nathan@example.com",
    };

    var xhr = new XMLHttpRequest();

    //👇 set the PHP page you want to send data to
    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    //👇 what to do when you receive a response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            alert("Response: " + data["name"]);
        }
    };

    //👇 send the data
    
    xhr.send(JSON.stringify(data));
}
</script>
<?php
echo $data['name'];
?>
