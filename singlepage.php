<!--
    SERVER-SIDE PROGRAMMING
    Ryan Marquez
    November 29, 2022

    This one page php file will display the result in one page.

 -->
<?php require_once ('php/header.php'); //Header File ?> 
<body>
<div class="container">
    <div id="leftContent">
    <form action="singlepage.php" method="POST">     
        <table>
            <thead>
                <tr><th colspan="2">REGISTRATION FORM</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="txtuserName">Username:</label></td>
                    <td><input type="text" id="txtuserName" name="txtuserName" placeholder="Enter Username" required/>*</td> <!-- Practice using required : Form can't be submitted if this isn't filled '-->
                </tr>
                <tr>
                    <td><label for="txtFirstName">First Name:</label></td>
                    <td><input type="text" id="txtFirstName" name="txtFirstName" placeholder="Enter First Name" required/>*</td> <!-- Practice using required : Form can't be submitted if this isn't filled -->
                </tr>
                <tr>
                    <td><label for="txtLastName">Last Name:</label></td>
                    <td><input type="text" id="txtLastName" name="txtLastName" placeholder="Enter Last Name" required/>*</td> <!-- Practice using required : Form can't be submitted if this isn't filled -->
                </tr>
                <tr>
                    <td><label for="txtPass">Password:</label></td>
                    <td><input type="password" id="txtPass" name="txtPass" placeholder="Enter Password"/></td>
                </tr>
                <tr>
                    <td><label for="txtPassConf">Confirm Password:</label></td>
                    <td><input type="password" id="txtPassConf" name="txtPassConf" placeholder="Confirm Password"/></td>
                </tr>
                <tr>
                    <td><label for="txtEmail">Email Address:</label></td>
                    <td><input type="text" id="txtEmail" name="txtEmail" placeholder="Enter Email Address" /></td> <!-- email type must follow email format rule. will show up an error if in wrong format.-->
                </tr>
                <tr>
                    <td><label for="province">Province:</label></td>
                    <td>
                        <select name="province" id="province">
                            <option value="">Select Province</option>
                            <option value="AB">Alberta</option>
                            <option value="BC">British Columbia</option>
                            <option value="MB">Manitoba</option>
                            <option value="NB">New Brunswick</option>
                            <option value="NL">Newfoundland and Labrador</option>
                            <option value="NS">Nova Scotia</option>
                            <option value="NT">Northwest Territories</option>
                            <option value="NU">Nunavut</option>
                            <option value="ON">Ontario</option>
                            <option value="PE">Prince Edward Island</option>
                            <option value="QC">Quebec</option>
                            <option value="SK">Saskatchewan</option>
                            <option value="YT">Yukon</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label id="chkBoxA" for="chkBoxA">I agree to the Terms and Conditions: </label>
                        <input type="hidden" id="chkBoxA" name="chkBoxA" value="off" />
                        <input type="checkbox" id="chkBoxA" name="chkBoxA" />
                    </td>
                </tr>           
            </tbody>
            <tfoot>
                <tr>
                    <td><p id="note">* - Required</p></td>
                    <td><input type="submit" value="Submit" name="formvalues" /><input type="reset" name="reset" value="Reset" /></td>
                </tr>
            </tfoot>
        </table>
    </form>
    <form action="singlepage.php" method="POST">            
        <table>
            <thead class="mathBG">
                <tr><th colspan="2">DO THE MATH</th></tr>
            </thead>
            <tbody>
                
                    <tr><td colspan="1">
                    <td>
                    <label for="num1">Number 1: </label><input type="number" id="num1" name="num1" size="1" required/> *<br>
                    <label for="num2">Number 2: </label><input type="number" id="num2" name="num2" size="1" required /> *<br>
                    <label for="optr">Operator: <select name="optr" id="optr" width="5">
                            <option value="a">Addition</option>
                            <option value="s">Subtraction</option>
                            <option value="d">Division</option>
                            <option value="m">Multiplication</option>
                        </select>
                    </td>
                    </td></tr>
                <tr>
                </tr>                
            </tbody>
            <tfoot>
                <tr>
                    <td><p id="note">* - Required</p></td>
                    <td><input type="submit" value="Calculate" name="Calculate" id="Calculate" /><input type="reset" name="reset" value="Reset" /></td>
                </tr>
            </tfoot>
        </table>
    </form>
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
            echo "<br><br><a href='./singlepage.php'><input id='clear' type='button' value='Clear Result'></a>";            
        }
    }
    // My function to calculate based on the selected operator value
    function calculate($number1, $number2, $operator="a") { // Default Selected - one of the assignment requirements
        // I used the switch case function to deal with the given options in the assignment.
        switch ($operator) {
            case "a":
                echo "<hr><b>ADDITION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1+$number2,"</b>";
                break;
            case "s":
                echo "<hr><b>SUBTRACTION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1-$number2,"</b>";
                break;
            case "d":
                if($number1==0 or $number2==0)
                echo "<hr><b>DIVISION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>Can't divide with zero</b>";
                
                elseif($number1!=0 or $number2!=0)
                echo "<hr><b>DIVISION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1/$number2,"</b>";                
                break;
            case "m":
                echo "<hr><b>MULTIPLICATION</b><br>Number 1 = <b>", $number1, "</b><br>", "Number 2 = <b>", $number2, "</b><br>Operator = <b>\"",$operator,"\"</b><br>Result = <b>", $number1*$number2,"</b>";
                break;
        }
        echo "<hr><br><br><a href='./singlepage.php'><input id='clear' type='button' value='Clear Result'></a>"; // Go to the parent path to clear page

    }
    // I created this function to detect the submit button selection based on its name value. :)
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
    <td id="results"></td>
    <td id="results"><?php formLogic(); ?></td>
<?php resultTemplateBottom(); ?>
                            
<?php require_once ('php/footer.php'); // Footer File ?>