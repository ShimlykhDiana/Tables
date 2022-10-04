<!DOCTYPE html>
<html lang="en">
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег table</title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
 </head>

 <body>
<span> A truth table </span>
<?php $a1 = !0 ?>
<?php $a2 = 0 || 0 ?>
<?php $a4 = 0 && 0 ?> 
<?php $a5 = 0 xor 0 ?>
<?php $a6 = 0 || 1 ?>
<?php $a7 = 0 && 1 ?>
<?php $a8 = 0 xor 1 ?>
<?php $a9 = !1 ?>
<?php $a10 = 1 || 0 ?>
<?php $a11 = 1 && 0 ?>
<?php $a12 = 1 xor 0 ?>
<?php $a13 = 1 || 1 ?>
<?php $a14 = 1 && 1 ?>
<?php $a15 = 1 xor 1 ?>

 <table border="1">
  <tr id="upper">
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
         </tr>
    <tr> 
            <th>0</th>
            <th>0</th>
            <th><?php echo $a1 ?> </th>
            <th><?php echo $a2 ?>0</th>
            <th><?php echo $a4 ?>0</th>
            <th><?php echo $a5 ?></th> 
    </tr>
    <tr> 
            <th>0</th>
            <th>1</th>
            <th><?php echo $a1 ?></th>
            <th><?php echo $a6 ?></th>
            <th><?php echo $a7 ?>0</th>
            <th><?php echo $a8 ?></th> 
    </tr>
    <tr> 
            <th>1</th>
            <th>0</th>
            <th><?php echo $a9 ?>0</th>
            <th><?php echo $a10 ?></th>
            <th><?php echo $a11 ?>0</th>
            <th><?php echo $a12 ?></th> 
    </tr>
    <tr> 
            <th>1</th>
            <th>1</th>
            <th><?php echo $a9 ?>0</th>
            <th><?php echo $a13 ?></th>
            <th><?php echo $a14 ?></th>
            <th><?php echo $a15 ?></th> 
    </tr>
</table>
<br>
<br>

<span> Loose comparisons with == </span>
  <table border="1">

   <tr id="upper">
    <th></th>
    <th>true</th>
    <th>false </th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
   </tr>
  
   <tr>
    <td id="left">true</td>
        <td><?php echo(true == true) ?></td>
        <td><?php echo(true == false) ?>0</td>
        <td><?php echo(true == 1) ?></td>
        <td><?php echo(true == 0) ?>0</td>
        <td><?php echo(true == -1) ?></td>
        <td><?php echo(true == "1") ?></td>
        <td><?php echo(true == null) ?>0</td>
        <td><?php echo(true == "php") ?></td>
  </tr>

  <tr>
    <td id="left">false</td>
        <td><?php echo(false == true) ?>0</td>
        <td><?php echo(false == false) ?></td>
        <td><?php echo(false == 1) ?>0</td>
        <td><?php echo(false == 0) ?></td>
        <td><?php echo(false == -1) ?>0</td>
        <td><?php echo(false == "1") ?>0</td>
        <td><?php echo(false == null) ?></td>
        <td><?php echo(false == "php") ?>0</td>
  </tr>

  <tr>
    <td id="left" >1</td>
        <td><?php echo(1 == true) ?></td>
        <td><?php echo(1 == false) ?>0</td>
        <td><?php echo(1 == 1) ?></td>
        <td><?php echo(1 == 0) ?>0</td>
        <td><?php echo(1 == -1) ?>0</td>
        <td><?php echo(1 == "1") ?></td>
        <td><?php echo(1 == null) ?>0</td>
        <td><?php echo(1 == "php") ?>0</td>
  </tr>

  <tr>
    <td id="left"> 0</td>
        <td><?php echo(0 == true) ?>0</td>
        <td><?php echo(0 == false) ?></td>
        <td><?php echo(0 == 1) ?>0</td>
        <td><?php echo(0 == 0) ?></td>
        <td><?php echo(0 == -1) ?>0</td>
        <td><?php echo(0 == "1") ?>0</td>
        <td><?php echo(0 == null) ?></td>
        <td><?php echo(0 == "php") ?> 0 </td>
  </tr>

  <tr>
    <td id="left"> -1 </td>
        <td><?php echo(-1 == true) ?></td>
        <td><?php echo(-1 == false) ?>0</td>
        <td><?php echo(-1 == 1) ?>0</td>
        <td><?php echo(-1 == 0) ?>0</td>
        <td><?php echo(-1 == -1) ?></td>
        <td><?php echo(-1 == "1") ?>0</td>
        <td><?php echo(-1 == null) ?>0</td>
        <td><?php echo(-1 == "php") ?>0</td>
  </tr>

  <tr>
    <td id="left" > "1"</td>
        <td><?php echo("1" == true) ?></td>
        <td><?php echo("1" == false) ?>0</td>
        <td><?php echo("1" == 1) ?></td>
        <td><?php echo("1" == 0) ?>0</td>
        <td><?php echo("1" == -1) ?>0</td>
        <td><?php echo("1" == "1") ?></td>
        <td><?php echo("1" == null) ?>0</td>
        <td><?php echo("1" == "php") ?>0</td>
  </tr>

  <tr>
    <td id="left"> null</td>
        <td><?php echo("null" == true) ?></td>
        <td><?php echo("null" == false) ?>0</td>
        <td><?php echo("null" == 1) ?>0</td>
        <td><?php echo("null" == 0) ?>0</td>
        <td><?php echo("null" == -1) ?>0</td>
        <td><?php echo("null" == "1") ?>0</td>
        <td><?php echo("null" == null) ?>0</td>
        <td><?php echo("null" == "php") ?>0</td>
  </tr>

  <tr>
    <td id="left"> "php"</td>
        <td><?php echo("php" == true) ?></td>
        <td><?php echo("php" == false) ?>0</td>
        <td><?php echo("php" == 1) ?>0</td>
        <td><?php echo("php" == 0) ?>0</td>
        <td><?php echo("php" == -1) ?>0</td>
        <td><?php echo("php" == "1") ?>0</td>
        <td><?php echo("php" == null) ?>0</td>
        <td><?php echo("php" == "php") ?></td>
  </tr>
 </table>
<br>
<br>

 <span> Strict comparisons with === </span>
 
 <table border="1">

<tr id="upper">
 <th></th>
 <th>true</th>
 <th>false </th>
 <th>1</th>
 <th>0</th>
 <th>-1</th>
 <th>"1"</th>
 <th>null</th>
 <th>"php"</th>
</tr>

<tr>
 <td id="left">true</td>
     <td><?php echo(true === true) ?></td>
     <td><?php echo(true === false) ?>0</td>
     <td><?php echo(true === 1) ?>0</td>
     <td><?php echo(true === 0) ?>0</td>
     <td><?php echo(true === -1) ?>0</td>
     <td><?php echo(true === "1") ?>0</td>
     <td><?php echo(true === null) ?>0</td>
     <td><?php echo(true === "php") ?>0</td>
</tr>

<tr>
 <td id="left">false</td>
     <td><?php echo(false === true) ?>0</td>
     <td><?php echo(false === false) ?></td>
     <td><?php echo(false === 1) ?>0</td>
     <td><?php echo(false === 0) ?>0</td>
     <td><?php echo(false === -1) ?>0</td>
     <td><?php echo(false === "1") ?>0</td>
     <td><?php echo(false === null) ?>0</td>
     <td><?php echo(false === "php") ?>0</td>
</tr>

<tr>
 <td id="left" >1</td>
     <td><?php echo(1 === true) ?>0</td>
     <td><?php echo(1 === false) ?>0</td>
     <td><?php echo(1 === 1) ?></td>
     <td><?php echo(1 === 0) ?>0</td>
     <td><?php echo(1 === -1) ?>0</td>
     <td><?php echo(1 === "1") ?>0</td>
     <td><?php echo(1 === null) ?>0</td>
     <td><?php echo(1 === "php") ?>0</td>
</tr>

<tr>
 <td id="left"> 0</td>
     <td><?php echo(0 === true) ?>0</td>
     <td><?php echo(0 === false) ?>0</td>
     <td><?php echo(0 === 1) ?>0</td>
     <td><?php echo(0 === 0) ?></td>
     <td><?php echo(0 === -1) ?>0</td>
     <td><?php echo(0 === "1") ?>0</td>
     <td><?php echo(0 === null) ?>0</td>
     <td><?php echo(0 === "php") ?> 0 </td>
</tr>

<tr>
 <td id="left"> -1 </td>
     <td><?php echo(-1 === true) ?>0</td>
     <td><?php echo(-1 === false) ?>0</td>
     <td><?php echo(-1 === 1) ?>0</td>
     <td><?php echo(-1 === 0) ?>0</td>
     <td><?php echo(-1 === -1) ?></td>
     <td><?php echo(-1 === "1") ?>0</td>
     <td><?php echo(-1 === null) ?>0</td>
     <td><?php echo(-1 === "php") ?>0</td>
</tr>

<tr>
 <td id="left" > "1"</td>
     <td><?php echo("1" === true) ?>0</td>
     <td><?php echo("1" === false) ?>0</td>
     <td><?php echo("1" === 1) ?>0</td>
     <td><?php echo("1" === 0) ?>0</td>
     <td><?php echo("1" === -1) ?>0</td>
     <td><?php echo("1" === "1") ?></td>
     <td><?php echo("1" === null) ?>0</td>
     <td><?php echo("1" === "php") ?>0</td>
</tr>

<tr>
 <td id="left"> null</td>
     <td><?php echo("null" === true) ?>0</td>
     <td><?php echo("null" === false) ?>0</td>
     <td><?php echo("null" === 1) ?>0</td>
     <td><?php echo("null" === 0) ?>0</td>
     <td><?php echo("null" === -1) ?>0</td>
     <td><?php echo("null" === "1") ?>0</td>
     <td><?php echo("null" === null) ?>0</td>
     <td><?php echo("null" === "php") ?>0</td>
</tr>

<tr>
 <td id="left"> "php"</td>
     <td><?php echo("php" === true) ?>0</td>
     <td><?php echo("php" === false) ?>0</td>
     <td><?php echo("php" === 1) ?>0</td>
     <td><?php echo("php" === 0) ?>0</td>
     <td><?php echo("php" === -1) ?>0</td>
     <td><?php echo("php" === "1") ?>0</td>
     <td><?php echo("php" === null) ?>0</td>
     <td><?php echo("php" === "php") ?></td>
</tr>
</table>
<br>
<br>
<div id="border">
<span id="conclusion"> If two operands of different types are compared using <p>loose comparison</p> then there is an attempt to convert one or both of the operands and then compare them.</span>
<br>
<br>
   <span id="conclusion"> In <p>strict comparison </p>, we check if two variables are identical. Variables are identical if each variable has the same data type and value.</span>
</div> 
</body>
</html>