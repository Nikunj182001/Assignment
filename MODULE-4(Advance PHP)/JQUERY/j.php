<!-- j) Apply jQuery validation using library. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-cdn.js"></script>
    <style>
        body{
            margin: 200px;
            margin-left: 500px;
        }
    </style>
</head>
<body>

        RADIO:
        <input type="radio" name="radio" id="r1">male
        <input type="radio" name="radio" id="r2">female <b id="b2"></b><br><br>

        CHECKBOX:
        <input type="checkbox" name="" id="c1">check1
        <input type="checkbox" name="" id="c2">check2
        <input type="checkbox" name="" id="c3">check3
        <input type="checkbox" name="" id="c4">check4 <b id="b3"></b> <br><br><br>

        <button id="b1">submit</button>

        <script>
            r1 = $('#r1');
            r2 = $('#r2');
            b1 = $('#b1');
            b2 = $('#b2');
            b3 = $('#b3');


                // console.log(r1.prop('checked'));
            b1.click(function(){
                if(r1.prop('checked') == false && r2.prop('checked') == false)
                {
                    b2.html("select radio");
                    b2.css('color','red')
                }
                else
                {
                    b2.html("");
                }

                if($('#c1').prop('checked') != false || $('#c2').prop('checked') != false || $('#c3').prop('checked') != false || $('#c4').prop('checked') != false)
                {
                    b3.html("");
                }
                else
                {
                    b3.css('color','red');
                    b3.html("select checkbox");
                }
            })
           


        </script>
    
</body>
</html>