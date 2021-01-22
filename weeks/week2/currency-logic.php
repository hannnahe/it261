<?php
// our currency example below


//1 ruble = 0.013 dollars 
//1 pound sterling = 1.28 dollars 
//1 canada = 0.79 dollars 
//1 euro = 1.18 dollars 
//1 yen = 0.0094 dollars 


// ruble = 10007
// pound sterling = 500
//canada = 5000
// euro = 1200
// yen = 2500

//you CANNOT echo anything above the doctype!!!
?>

<!doctype html>  
<html lan='en'>
<head>
<meta charset="UTF-8">
<style>
    table{
        width:300px;
        margin:0 auto;
        border:2px solid green;
        border-collapse:collapse;
    } 
    
    td{
        border:2px dashed green;
        padding: 6px;
        
    }
    th {
        padding: 5px;
        background: lightpink;
    }
    
    
</style>
    
</head>
<body>
 <table>
<tr>
<th>Money</th> 
<th>Dollars</th>
</tr>
 <tr>
     <td>Rubles</td>
     <td>130.09</td>
</tr>
      <tr>
     <td>Sterling</td>
     <td>640</td>
</tr>
     <tr>
     <td>Canada</td>
     <td>3950</td>
</tr>
      <tr>
     <td>Euro</td>
     <td>1416</td>
</tr>
     <tr>
     <td>Yen</td>
     <td>23.50</td>
</tr>
     
     
     
     
     
     
     
</table>   
    
    
    
</body>
</html>