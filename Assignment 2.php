<?php

function checkEligibility($data) {
    // define the eligibility 
    $requiredDiploma = "CS";
    $requiredYearsOfExperience = "4";
    $requiredGraduationDate = "2020";
    $requiredSkill = "PHP";

    // loop through the array and check eligibility
    foreach ($data as $item) {
        $diploma = $item[0];
        $experience = $item[1];
        $graduationDate = $item[2];
        $skill = $item[3];

        if ($diploma === $requiredDiploma &&
            $experience === $requiredYearsOfExperience &&
            $graduationDate === $requiredGraduationDate &&
            $skill === $requiredSkill) {
            return "You are eligible for the job. Your interview is in 1 week!";
        }
    }

    return "We are sorry, we moved on with other candidates.";
}

// [prompt the user to input their data
$data = [];
$numCandidates = (int)readline("Enter the number of candidates: ");

for ($i = 0; $i < $numCandidates; $i++) {
    echo "Candidate " . ($i + 1) . ":\n";
    $diploma = readline("Diploma initials (e.g., CS): ");
    $experience = readline("Years of experience: ");
    $graduationDate = readline("Graduation date: ");
    $skill = readline("Important skill: ");
    $data[] = [$diploma, $experience, $graduationDate, $skill];
}

// check eligibility and display the final results
$result = checkEligibility($data);
echo $result . "\n";

?>