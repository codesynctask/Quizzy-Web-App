<?php
$api_url = 'https://opentdb.com/api.php?amount=10&category=18&difficulty=medium&type=multiple';
$file_path_to_store = "C:/wamp64/www/ARTH/QUIZ_WEB_APPP/data/quizDATA.json";

// Fetch data from API
$jsonString = @file_get_contents($api_url);


if ($jsonString === FALSE) {
    echo "<script>console.log('data not fetched | using hardcoded question');</script>";
    $jsonString = `{
        "response_code": 0,
        "results": [
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "Laserjet and inkjet printers are both examples of what type of printer?",
                "correct_answer": "Non-impact printer",
                "incorrect_answers": [
                    "Impact printer",
                    "Daisywheel printer",
                    "Dot matrix printer"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "How many cores does the Intel i7-6950X have?",
                "correct_answer": "10",
                "incorrect_answers": [
                    "12",
                    "8",
                    "4"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "Unix Time is defined as the number of seconds that have elapsed since when?",
                "correct_answer": "Midnight, January 1, 1970",
                "incorrect_answers": [
                    "Midnight, July 4, 1976",
                    "Midnight on the creator of Unix&#039;s birthday",
                    "Midnight, July 4, 1980"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "Which of these is the name for the failed key escrow device introduced by the National Security Agency in 1993?",
                "correct_answer": "Clipper Chip",
                "incorrect_answers": [
                    "Enigma Machine",
                    "Skipjack",
                    "Nautilus"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "In CSS, which of these values CANNOT be used with the &quot;position&quot; property?",
                "correct_answer": "center",
                "incorrect_answers": [
                    "static",
                    "absolute",
                    "relative"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "The name of technology company HP stands for what?",
                "correct_answer": "Hewlett-Packard",
                "incorrect_answers": [
                    "Howard Packmann",
                    "Husker-Pollosk",
                    "Hellman-Pohl"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "What five letter word is the motto of the IBM Computer company?",
                "correct_answer": "Think",
                "incorrect_answers": [
                    "Click",
                    "Logic",
                    "Pixel"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "Generally, which component of a computer draws the most power?",
                "correct_answer": "Video Card",
                "incorrect_answers": [
                    "Hard Drive",
                    "Processor",
                    "Power Supply"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": ".at is the top-level domain for what country?",
                "correct_answer": "Austria",
                "incorrect_answers": [
                    "Argentina",
                    "Australia",
                    "Angola"
                ]
            },
            {
                "type": "multiple",
                "difficulty": "medium",
                "category": "Science: Computers",
                "question": "The teapot often seen in many 3D modeling applications is called what?",
                "correct_answer": "Utah Teapot",
                "incorrect_answers": [
                    "Pixar Teapot",
                    "3D Teapot",
                    "Tennessee Teapot"
                ]
            }
        ]
    }`;
    $jsonString = json_encode($jsonString);
} else {
    echo "<script>console.log('data fetched successfully');</script>";
}

// Decode JSON response into a PHP associative array
$quizData = json_decode($jsonString, true);

// Convert the PHP array back to JSON format
$jsonDataToStore = json_encode($quizData, JSON_PRETTY_PRINT);

// Write the JSON data to the file
if (file_put_contents($file_path_to_store, $jsonDataToStore)) {
    echo "<script>console.log('Data written to file successfully after fetching from api');</script>";
} else {
    echo "<script>console.log('Failed to write data to file after fetching from api');</script>";
}
