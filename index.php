<?php

// Get the posted SHA256 value
$sha256 = $_POST['data'];

// Hardcode the expected SHA256 value
$expectedSha256 = 'your_expected_sha256_here';

// Compare the values
if ($sha256 === $expectedSha256) {
    // The SHA256 values match, return app update information
    $updateInfo = array(
        'status' => 1, // Status code indicating successful update check
        'update_info' => base64_encode(json_encode(array(
            'version_name' => '1.1.0', // Version name of the updated app
            'update_text' => 'This update fixes various bugs and adds new features', // Description of the update
            'apk_url' => 'http://example.com/app-release.apk' // URL of the updated APK
        ))),
    );
    echo json_encode($updateInfo);
} else {
    // The SHA256 values do not match, return error message
    $errorMessage = array(
        'status' => 0, // Status code indicating failed update check
        'error_message' => 'Invalid SHA256 value' // Error message to display to the user
    );
    echo json_encode($errorMessage);
}
