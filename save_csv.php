<?php
// save_csv.php
$data = json_decode(file_get_contents('php://input'), true);
if(isset($data['csv'])) {
    $csv = $data['csv'];
    // Write CSV data to file (adjust permissions as needed)
    if(file_put_contents('movie_reviews.csv', $csv) !== false) {
        echo "CSV file updated successfully.";
    } else {
        echo "Error writing CSV file.";
    }
} else {
    echo "No CSV data received.";
}
?>