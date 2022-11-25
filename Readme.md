Project:

I have written a ETL example where we have Input sources like CSV and JSON and we are using the Transformer to convert them to other format after processing. 

Assumption:

We are assuming that logic of transformation will be kept in the tranformer itself. Based on the different transformation logic, you can create different transformation class.
We are assuming that Transformer is aware about the input format so that he can do the transformation.

How to setup:
Install PHP 7.*
Install Composer
Run `composer install` in the root of the folder.
Run 'php index.php' -> It will transform and will generate the files


Other notes:

Kindly ignore the edge cases which I have not considered like Data validation & edge cases like file doesnt exist etc. I didn't do that in code as I wanted to convey the main part which is ETL flow and how Input, Output and Transformer is extendable. 

