<?php
    $data = [
        "student_name" => "张三",
        "subject_1" => 95,
        "subject_2" => 80,
        "subject_3" => 75,
        "total_score" => 300
    ];

    $average_score = array_sum($data['subject_1'] + $data['subject_2'] + $data['subject_3']) / 3;
    echo "平均成绩为: " . $average_score . "<br>";
?>
