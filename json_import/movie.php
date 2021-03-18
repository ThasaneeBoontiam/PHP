<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jsonfile = file_get_contents("movies.json");
    ?>

    <select name="year_movie" id="year_m" onchange="sltY()"></select><br>
    <select name="year_movie" id="year_movie" onchange="sltM()"></select><br>
    <input type="text" name="" id="year"><br>
    <input type="text" name="" id="title"><br>
    <textarea name=" " id="cast" cols="30" rows="10"></textarea>

    <script>
        //var str = "";
        var jsonEx = <?php echo $jsonfile;?>;
        for (var y = 1900; y <= 2018; y++){
            document.getElementById("year_m").innerHTML += "<option value ='"+ y + "'>"+ y +"</option>";
        }
        sltY();

        function sltY(){
            document.getElementById("year_movie").innerHTML = "";
            for(var i = 0; i<jsonEx.length; i++){
                if (jsonEx[i].year == document.getElementById("year_m").value){
                    document.getElementById("year_movie").innerHTML += "<option value='"+ jsonEx[i].year+ " : "+jsonEx[i].title+"'>"+jsonEx[i].year+" : "+jsonEx[i].title+"</option>";
                }
            }
            sltM();
        }
        function sltM(){
            var value = document.getElementById("year_movie").value;
            var year = value.substr(0,5);
            var title = value.substr(7);
            for(var i=0; i<jsonEx.length; i++){
                if(year == jsonEx[i].year){
                    if(title == jsonEx[i].title){
                        document.getElementById("year").value = jsonEx[i].year;
                        document.getElementById("title").value = jsonEx[i].title;
                        document.getElementById("cast").value = "";
                        for (var j=0; j<jsonEx[i].cast.length; i++){
                            document.getElementById("cast").value += jsonEx[i].cast[j]+"\n";
                        }
                    }
                }
            }
        }
    </script>
    <!--div id="output"></div-->
</body>
</html>