<?php
// create the function
function saveFromData($email, $name, $message) {
    // File path to store data
    $filepath = "form-data.json";
    // Ensure the file exists; create if it doesn't 
    if(!file_exists($filepath)) {
        file_put_contents($filepath, json_encode([], JSON_PRETTY_PRINT));
    }
    // Read existing data from the file 
    $existingData = [];
    $jsonContent = file_get_contents($filepath);
    $existingData = json_decode($jsonContent, true) ?? [];
    // create new data entry
    $newEntry = [
        "email" => $email,
        "name" => $name,
        "message" => $message,
        "timestamp" => date("Y-m-d H:i:s"),
    ];
    // Add new entry to existing data
    $existingData[] = $newEntry;

    // Write update data back to the file
    file_put_contents($filepath, json_encode($existingData, JSON_PRETTY_PRINT));
    
}