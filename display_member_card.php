<?php
// Function to display a member's card on the index page
function displayMemberCard($memberInfo, $index) {
    // Start of the card div
    echo "<div class='card'>";
    
    // Display the member's name
    echo "<h2>{$memberInfo['name']}</h2>";
    
    // Display the member's age by calculating it from the date of birth
    echo "<p>Age: " . calculateAge($memberInfo['dob']) . "</p>";
    
    // Display the member's role
    echo "<p>Role: {$memberInfo['role']}</p>";
    
    // End of the card div
    echo "</div>";
}
?>
