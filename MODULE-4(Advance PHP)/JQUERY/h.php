<!-- h) In <table> Design Change The Color Of Even <tr> Elements To 
“green”And Change The Color Of Odd <tr> Elements To “blue” Color? Give
An Example Code? -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-cdn.js"></script>
</head>
<body>
    <table border = 1px>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
        <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr><td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td></tr>
        <tr>
        <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
        <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
    </table>

    <script>
        trs = ($('tr'));
        

        for(i=0;i<trs.length;i++)
        {
            if(i%2 == 0)
            {
            trs[i].style.color = "green";
            }
            else
            {
                trs[i].style.color = "blue";
            }
        }
    </script>
    
</body>
</html>