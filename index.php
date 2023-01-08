<!--
    SERVER-SIDE PROGRAMMING
    Ryan Marquez
    November 29, 2022
 -->
<?php require_once ('php/header.php'); //Header File ?> 
<body>
<div class="container">
    <div id="leftContent">
    <form action="result.php" method="POST">     
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
    <form action="result.php" method="POST">            
        <table>
            <thead class="mathBG">
                <tr><th colspan="2">DO THE MATH</th></tr>
            </thead>
            <tbody>                
                    <tr><td colspan="1">
                    <td>
                    <label for="num1">Number 1: </label><input type="number" id="num1" name="num1" size="1" required/> *<br>
                    <label for="num2">Number 2: </label><input type="number" id="num2" name="num2" size="1" required /> *<br>
                    <!-- Operator value when type of operation is selected -->
                    <label for="optr">Operation: <select name="optr" id="optr" width="5">
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
<?php require_once ('php/footer.php'); // Footer File ?>