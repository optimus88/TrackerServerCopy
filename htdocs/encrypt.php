<?php
$input = 88;
function encrypt_string($input)
{
 
    $inputlen = strlen($input);// Counts number characters in string $input
    $randkey = rand(1, 9); // Gets a random number between 1 and 9
 
    $i = 0;
    while ($i < $inputlen)
    {
 
        $inputchr[$i] = (ord($input[$i]) - $randkey);//encrpytion 
 
        $i++; // For the loop to function
    }
 
//Puts the $inputchr array togtheir in a string with the $randkey add to the end of the string
    $encrypted = implode('.', $inputchr) . '.' . (ord($randkey)+50);
    return $encrypted;
}
 
$input = $_GET["input"];// encryption.php?input=data-I-want-to encrpyt
$encrypted = encrypt_string($input);
echo "<strong>Encrypted:</strong> $encrypted";

function decrypt_string($input)
{
  $input_count = strlen($input);
 
  $dec = explode(".", $input);// splits up the string to any array
  $x = count($dec);
  $y = $x-1;// To get the key of the last bit in the array 
 
  $calc = $dec[$y]-50;
  $randkey = chr($calc);// works out the randkey number
 
  $i = 0;
 
   while ($i < $y)
  {
 
    $array[$i] = $dec[$i]+$randkey; // Works out the ascii characters actual numbers
    $real .= chr($array[$i]); //The actual decryption
 
    $i++;
  };
 
$input = $real;
return $input;
}
 
$input = $_GET["data"];
$decrypted = decrypt_string($input);
echo "<strong>Decrypted:</strong> $decrypted";
?>