<!--
    SERVER-SIDE PROGRAMMING
    Ryan Marquez
    January 8, 2023
 -->
<?php require_once ('php/header.php'); //Header File ?> 
<body>
<div class="container">
    <div id="leftContent">
   

    </div>

<?php    
    //My function to display the TOP part of the result
    function resultTemplateTop() { 
        // If the value of the form submit button is name="Calculate", execute this code
        if(isset($_POST['Calculate'])) {
        // Displaying multiple line echo
        echo '<div>   
        <table>
        <thead class="mathBG">
        <th colspan="2">RESULTS</th>
        </thead>
        <tbody>
            <tr>
                <th id="results" colspan="2">MATH</th>
            </tr>
            <tr>';
        }
        // If the value of the form submit button is name="formvalues", execute this code
        if(isset($_POST['formvalues'])) {
        // Displaying multiple line echo
            echo '<div>   
            <table>
            <thead>
            <th colspan="2">RESULTS</th>
            </thead>
            <tbody>
                <tr>
                    <th id="results" colspan="2">FORM ENTRY</th>  
                </tr>
                <tr>';
            }
    }

    //My function to display the BOTTOM part of the result
    function resultTemplateBottom() {
        if(isset($_POST['Calculate'])) {
        echo '    </tr>
        </tbody>
        </table>
        </div>
        </div>';
        }
        if(isset($_POST['formvalues'])) {
            echo '    </tr>
            </tbody>
            </table>
            </div>
            </div>';
            }
    }
    // My function to display the result of the Registration Form
    function formResult() {
        if(isset($_POST['formvalues'])){
            $Username = $_POST['txtuserName'];
            $FirstName = $_POST['txtFirstName'];
            $LastName = $_POST['txtLastName'];            
            $Password = $_POST['txtPass'];
            $ConfirmPassword = $_POST['txtPassConf'];
            $Email = $_POST['txtEmail'];
            $Province = $_POST['province'];
            $AcceptTerms = $_POST['chkBoxA'];
            echo "<hr>Username: <b>", $Username, "</b>";
            echo "<hr>First Name: <b>", $FirstName, "</b>";
            echo "<hr>Last Name: <b>", $LastName, "</b>";
            echo "<hr>Password: <b>", $Password, "</b>";
            echo "<hr>Password Confirmation: <b>", $ConfirmPassword, "</b>";
            echo "<hr>Email: <b>", $Email, "</b>";
            echo "<hr>Province: <b>", $Province, "</b>";
            echo "<hr>Agreement: <b>", $AcceptTerms, "</b>";
            echo "<br><br><a href='./index.php'><input id='clear' type='button' value='Back to Forms'></a>"; // Back to Forms Button      
        }
    }
    // My function to calculate based on the selected operator value
    function calculate($number1, $number2, $operator="a") { // Default Selected - one of the assignment requirements
        // I used the switch case function to deal with the given options in this assignment.
        switch ($operator) {
            case "a":
                echo "<hr><b>ADDITION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1+$number2,"</b>";
                break;
            case "s":
                echo "<hr><b>SUBTRACTION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1-$number2,"</b>";
                break;
            case "d":
                if($number1==0 or $number2==0) // Handle Zero in Division print "Can't divide with zero"
                echo "<hr><b>DIVISION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>Can't divide with zero</b>";
                
                elseif($number1!=0 or $number2!=0)
                echo "<hr><b>DIVISION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1/$number2,"</b>";                
                break;
            case "m":
                echo "<hr><b>MULTIPLICATION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1*$number2,"</b>";
                break;
        }
        echo "<hr><br><br><a href='./index.php'><input id='clear' type='button' value='Back to Forms'></a>"; // Back to Forms Button

    }
    // I created this function for multiple forms in a page and to detect the submit button selection based on its name value. :)
    function formLogic() {
        if(isset($_POST['Calculate'])){            
            //echo ("calculate");
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
            $operator = $_POST['optr'];
            calculate($number1, $number2, $operator); // Call the calculate function when Calculate button is clicked       
        }
        if(isset($_POST['formvalues'])){
            formResult(); // Call the formResult function then the formvalues button is clicked
        }
    }   
?>
<!-- Print the result Order Layout Based on the Form Logic Function Result -->
<?php resultTemplateTop(); ?>    
    <td id="results"><?php formLogic(); ?></td>
<?php resultTemplateBottom(); ?>
                            
<?php require_once ('php/footer.php'); // Footer File ?>
