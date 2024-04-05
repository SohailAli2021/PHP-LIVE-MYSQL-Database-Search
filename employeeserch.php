<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function displayEmployee() {
            var ajaxHttpRequest = new XMLHttpRequest();
            var name = document.getElementById('name').value;
            if (name == "") {
                document.getElementById('result').innerHTML = "";
                return;
            }

            ajaxHttpRequest.onreadystatechange = function() {
                if (ajaxHttpRequest.readyState == 4) {
                    var displayResponse = document.getElementById('result');
                    displayResponse.innerHTML = ajaxHttpRequest.responseText;
                }
            }
            var query = "?name=" + name;
            ajaxHttpRequest.open('GET', "getEmployee.php" + query, true);
            ajaxHttpRequest.send(null);
        }
    </script>
</head>
<body>
    <h1>PHP LIVE MYSQL Database Search</h1>
    <div class="search-box">
        <input type="text" id="name" autocomplete="off" placeholder="Search Employee" onkeyup="displayEmployee()"/>
        <br><br>
        <div id="result">Result Will be Displayed here .....</div>
    </div>
</body>
</html>
