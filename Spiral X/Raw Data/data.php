<?php
// Simulate fetching data (could come from a database in a real scenario)
$data = [
    ["Row1-Col1", "Row1-Col2", "Row1-Col3", "Row1-Col4", "Row1-Col5", "Row1-Col6", "Row1-Col7", "Row1-Col8", "Row1-Col9", "Row1-Col10", "Row1-Col11", "Row1-Col12", "Row1-Col13", "Row1-Col14", "Row1-Col15", "Row1-Col16"],
    ["Row2-Col1", "Row2-Col2", "Row2-Col3", "Row2-Col4", "Row2-Col5", "Row2-Col6", "Row2-Col7", "Row2-Col8", "Row2-Col9", "Row2-Col10", "Row2-Col11", "Row2-Col12", "Row2-Col13", "Row2-Col14", "Row2-Col15", "Row2-Col16"],
    ["Row3-Col1", "Row3-Col2", "Row3-Col3", "Row3-Col4", "Row3-Col5", "Row3-Col6", "Row3-Col7", "Row3-Col8", "Row3-Col9", "Row3-Col10", "Row3-Col11", "Row3-Col12", "Row3-Col13", "Row3-Col14", "Row3-Col15", "Row3-Col16"]
    // Add more rows as needed
];

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);