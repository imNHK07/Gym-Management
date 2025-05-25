
    function myFun() {
            var a = document.getElementById("name").value;
            var b = document.getElementById("phone").value;
            var c = document.getElementById("address").value;
            var d = document.getElementsByName("gender");
            var e = document.getElementById("weight").value;
            var f = document.getElementsByName("experience");
            var genderSelected = false;
            var experience = false;

            if(a == "") {
                document.getElementById("demo").innerHTML = "Please fill the box";
                return false;
            }

            if(b==""||isNaN(b))
            {
                document.getElementById("dphone").innerHTML = "Must be numbers only";
                return false;
            }

            if(c == "") {
                document.getElementById("demo3").innerHTML = "Please fill the box";
                return false;
            }

            for(var i = 0; i < d.length; i++) {
            if(d[i].checked) {
            genderSelected = true;
            break;
            }
        }
    
        if(!genderSelected) {
        document.getElementById("demo4").innerHTML = "Please select any one";
        return false;
        }

        if(e == "") {
                document.getElementById("demo5").innerHTML = "Please fill the box";
                return false;
        }

        for(var i = 0; i < f.length; i++) {
            if(f[i].checked) {
            experience= true;
            break;
            }
        }
    
        if(!experience) {
        document.getElementById("demo6").innerHTML = "Please select any one";
        return false;
        }


        return true;
        
        }
