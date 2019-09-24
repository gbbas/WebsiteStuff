<?php
// Numeric array with data that will be displayed in HTML table
$aray = glob('uploads/*.*');
$nr_elm = count($aray);        // gets number of elements in $aray

// Create the beginning of HTML table, and of the first row
$html_table = '<table border="1 cellspacing="0" cellpadding="2""><tr>';
$nr_col = 2;       // Sets the number of columns

// If the array has elements
if ($nr_elm > 0) {
  // Traverse the array with FOR
  for($i=0; $i<$nr_elm; $i++) {
    $html_table .= '<td>' .$aray[$i]. '</td>';       // adds the value in column in table
    $html_table .= '<td><a href="' .$aray[$i]. '" download>download</a>';     
    $html_table .= '</tr><tr>';
  }
}

$html_table .= '</tr></table>';         // ends the last row, and the table

// Delete posible empty row (<tr></tr>) which cand be created after last column
$html_table = str_replace('<tr></tr>', '', $html_table);

echo $html_table;        // display the HTML table
?>