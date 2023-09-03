document.addEventListener("DOMContentLoaded", function() {
    // Add click event listeners to each category button
    document.getElementById("category1").addEventListener("click", function() {
        fetchCarDetails(1);
    });
    document.getElementById("category2").addEventListener("click", function() {
        fetchCarDetails(2);
    });
    document.getElementById("category3").addEventListener("click", function() {
        fetchCarDetails(3);
    });
    
    // Function to fetch car details based on category
    function fetchCarDetails(category) {
        // Use AJAX to request car details from the server
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Display the car details in the "carDetails" div
                document.getElementById("carDetails").innerHTML = xhr.responseText;
            }
        };
        xhr.open("GET", "get_car_details.php?category=" + category, true);
        xhr.send();
        <alert>hello</alert>
    }
});
