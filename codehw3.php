<!DocTYPE html>

<html>

<body>

<h1>Coin Toss Cont'ed</h1>


<?php
 
function coinToss($number)
{
    $result = 'Beginning the coin flipping, looking for ' . $number . ' heads in a row...<br>';
   
    $flips_counter = 1;
    $number_of_heads = 0;
   
    for ( ; ; ) {
        $random = mt_rand();
        $image = ($random % 2 == 0) ? 'head' : 'tail';
       
        if ($image == 'tail') {
            $imageUrl = 'tail.png';
        } else {
            $imageUrl = 'head.png';
        }
 
        $result .= '<img src="' . $imageUrl . '" width="50" height="50" alt=""> &nbsp; ';
       
        if ($flips_counter > 1) {
            if ($image == 'head') {
                $number_of_heads++;
            } else {
                $number_of_heads = 0;
            }
           
            if ($number_of_heads == $number) {
                break;
            }
        }
       
       
        $flips_counter++;
       
    }
   
    $result .= '<br>Flipped ' . $number . ' heads in a row in ' . $flips_counter . ' flips.';
   
   
    return $result;
}
 
 
echo coinToss(4);
 
 
 echo('<h1>Challenge: <span style="font-weight: normal;">Book List</span></h1>');
 
 
 
 $books = [
    [
        'title' => 'PHP and MySQL Web Development',
        'first_name' => 'Luke',
        'last_name' => 'Welling',
        'pages' => 144,
        'type' => 'Paperback',
        'price' => 31.63,
    ],
    [
        'title' => 'Web Design with HTML, CSS, JavaScript and jQuery',
        'first_name' => 'Jon',
        'last_name' => 'Duckett',
        'pages' => 135,
        'type' => 'Paperback',
        'price' => 41.23,
    ],
    [
        'title' => 'PHP Cookbook: Solutions & Examples for PHP Programmers',
        'first_name' => 'David',
        'last_name' => 'Sklar',
        'pages' => 14,
        'type' => 'Paperback',
        'price' => 40.88,
    ],
    [
        'title' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'first_name' => 'Jon',
        'last_name' => 'Duckett',
        'pages' => 251,
        'type' => 'Paperback',
        'price' => 22.09,
    ],
    [
        'title' => 'Modern PHP: New Features and Good Practices',
        'first_name' => 'Josh',
        'last_name' => 'Lockhart',
        'pages' => 7,
        'type' => 'Paperback',
        'price' => 28.49,
    ],
    [
        'title' => 'Programming PHP',
        'first_name' => 'Kevin',
        'last_name' => 'Tatroe',
        'pages' => 26,
        'type' => 'Paperback',
        'price' => 28.96,
    ],
];
$total = 0;
 
?>
 
<table border="1" cellpadding="10">
 
    <thead bgcolor="#7FFFD4">
 
       <th>Title</th>
 
       <th>First Name</th>
 
       <th>Last Name</th>
 
       <th>Number of Pages</th>
 
       <th>Type</th>
 
       <th>Price</th>
 
    </thead>
 
    <tbody>
 
       <?php
       $counter = 0;
       foreach ($books as $book)
       {
           if ($counter % 2 == 0) {
               $bgColor = '#FFFFFF';
           } else {
               $bgColor = '#AFEEEE';
           }
 
           echo '<tr bgcolor="' . $bgColor . '">';
           
           foreach ($book as $book_info)
           {
               echo '<td>' . $book_info . '</td>';
           }
           
           echo '</tr>';
           
           $total += $book['price'];
 
           $counter++;
       }
       
       ?>
 
    </tbody>
 
</table>
 
<center>
<div style="background-color: #7FFFD4; color: #000000; padding: 10px; width: 300px; text-align: center; border-radius: 7px;">
Your total price is:<br>
$<?php echo $total; ?>
</div>
</center>
 





</body>

</html>
