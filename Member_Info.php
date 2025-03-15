<!DOCTYPE html>
<html>
    <body>

    <h1>Payment Structure</h1>

    <table border="2">
    <thead>
        <th>Membership Type</th>
        <th>Duration</th>
        <th>Monthly Fee</th>
        <th>Discount (%)</th>
        <th>Total with Discount</th>
    </thead>

    <tbody>
        <tr>
            <td>Basic</td>
            <td>1 Month</td>
            <td>1,500</td>
            <td>0%</td>
            <td>1500</td>
        </tr>


        <tr>
            <td>Standard</td>
            <td>3 Months</td>
            <td>2,000</td>
            <td>5%</td>
            <td>1900</td>
        </tr>


        <tr>
            <td>Premium</td>
            <td>6 Months</td>
            <td>3,500</td>
            <td>7%</td>
            <td>3150</td>
        </tr>

    </tbody>


    </table>

</br>

    <h1>Information Desk</h1>
     
    <form action="url" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            
        <label for="name">Name: </label>
        <input type="text" id="name"> 
</br>
</br>

        <label for="phone">Phone: </label>
        <input type="text" id="phone"> 
</br>
</br>

        <label for="address">Address: </label>
        <input type="text" id="address"> 
</br>
</br>

        <label for="gender">Gender: </label>
        <input type="radio" id="gender" name="male">Male
        <input type="radio" id="gender" name="male">Female
        <input type="radio" id="gender" name="male">Other
</br>
</br>

        <label for="birth">Date of Birth: </label>
        <input type="date" id="birth"> 
        </fieldset>



</br>
</br>

       <fieldset>
        <legend>Trainee's Track</legend>

        <label for="weight">Body Weight: </label>
        <input type="text" id="weight">
</br> 


        <p>Are you new to gym workout?</p>
        <input type="radio" id="yes" name="experience">
        <label for="yes">Yes I'm new to the gym</label><br>
</br>       
        <input type="radio" id="no" name="experience">
        <label for="no">No I have trained before</label><br>

</br>


        <p>Do you have any injury?</p>
        <input type="radio" id="yes" name="injury">
        <label for="yes">Yes</label><br>
</br>       
        <input type="radio" id="no" name="injury">
        <label for="no">No</label><br>

        <p>If you have any injuries, please describe them briefly.</p>
        <textarea name="injury" id="injury" cols="55" rows="10"></textarea>

        <p>Select Prefarable Weight (kg) Range</p>
        <input type="checkbox" id="less_than_10" >
        <label for="less_than_10">Less than 10 kgs</label><br>

        <input type="checkbox" id="exactly_10" >
        <label for="exactly_10">Exactly 10 kgs</label><br>

        <input type="checkbox" id="more_than_10">
        <label for="more_than_10">More than 10 kgs</label><br>

        <input type="checkbox" id="exactly_20">
        <label for="exactly_20">Exactly 20 kgs</label><br>

        <input type="checkbox" id="more_than_20">
        <label for="more_than_20">More than 20 kgs</label><br>

       </fieldset>
</form>
       

</br>
</br>


       <button>Save</button>

    </body>
</html>
