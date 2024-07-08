<!-- k) Create custom dynamic function for require field validator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="jquery-cdn.js"></script> -->
</head>
<body>

            <form action="" method="post">
                NAME:
                <input type="text" name="name" id="i1"><br>
                <p id="p1"></p>

                EMAIL:
                <input type="text" name="email" id="i2"><br>
                <p id="p2"></p>

                PASSWORD:
                <input type="password" name="password" id="i3"><br>
                <p id="p3"></p>

                ADDRESS:
                <input type="textarea" name="address" id="i4"><br>
                <p id="p4"></p>

                <input type="submit" name="submit" id="submit"  onclick = "return validate()">
            </form>

            <!-- <script>
                $('#submit').click(function(){
                    if($('#i1').prop('value') == "")
                    {
                        alert("enter name");
                    }
                })
            </script> -->
            <script>
                name1 = document.getElementById("i1");
                p1 = document.getElementById("p1"); 

                email = document.getElementById("i2");
                p2 = document.getElementById("p2"); 

                pass = document.getElementById("i3");
                p3 = document.getElementById("p3"); 

                address = document.getElementById("i4");
                p4 = document.getElementById("p4"); 

                function validate()
                {
                    if(name1.value == "")
                    {
                        p1.innerHTML = "enter name....";
                        p1.style.color = "red";
                        return false;
                    }
                    else
                    {
                        p1.innerHTML = "";
                    }
                    if(email.value == "")
                    {
                        p2.innerHTML = "enter email....";
                        p2.style.color = "red";
                        return false;
                    }
                    else
                    {
                        p2.innerHTML = "";
                    }
                    if(pass.value == "")
                    {
                        p3.innerHTML = "enter password....";
                        p3.style.color = "red";
                        return false;
                    }
                    else
                    {
                        p3.innerHTML = "";
                    }
                    if(address.value == "")
                    {
                        p4.innerHTML = "enter address....";
                        p4.style.color = "red";
                        return false;
                    }
                    else
                    {
                        p4.innerHTML = "";
                    }



                }
            </script>

</body>
</html>