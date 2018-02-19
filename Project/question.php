<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        div#test {
            border: #000 1px solid;
            padding: 10px 40px 10px 40px;
        }
    </style>
    <script>
        var pos = 0,test,test_status,question,choice,choices,chA,chB,chC,correct = 0;
      
             var questions = [
                   ["What is the capital of India ?", "Panaji","NewDelhi","Itanagar","B"],
                   ["The Indias highest annual rainfall is reported at ?", "Namchi, Sikkim", "Chamba, Himachal Pradesh", "Mawsynram, Meghalaya","C"],
                   ["The Radcliffe line is a boundary between ?", "India and Pakistan", "India and China", "India and Afghanistan","A"],
                   ["The state having a largest area of forest cover in India is ?", "Arunachal Pradesh", "Haryana", "Madhya Pradesh","C"],
                   ["The Battle of Plassey was fought in ?", "1757", "1782", "1764","A"],
                   ["Tripitakas are sacred books of ?", "Buddhists", "Hindus", "Jains","A"],
                   ["The language of discourses of Gautama Buddha was ?", "Bhojpuri", "Magadhi", "Pali","C"],
                   ["Pulakesin II was the most famous ruler of ?","Chalukyas","Cholas","Pallavas","A"],
                   ["The members of the Rajya Sabha are elected by ?","Lok Sabha","elected members of the legislative assembly","elected members of the legislative council","B"],
                   ["The present Lok Sabha is the ?","16th Lok Sabha","15th Lok Sabha","14th Lok Sabha","A"]
             ]
        function _(x) {
            return document.getElementById(x);
        }
        function renderQuestion() {
            test = _("test");
            if(pos >= questions.length) {
                test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
                _("test_status").innerHTML = "Test Completed";
                pos = 0;
                correct = 0;
                return false;
            }
            _("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
                question = questions[pos][0];
                chA = questions[pos][1];
                chB = questions[pos][2];
                chC = questions[pos][3];

                test.innerHTML ="<h3>"+question+"</h3>";
                test.innerHTML += "<input type='radio' name='choices' value='A'>"+chA+"<br>";
                test.innerHTML += "<input type='radio' name='choices' value='B'>"+chB+"<br>";
                test.innerHTML += "<input type='radio' name='choices' value='C'>"+chC+"<br><br>";
                test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
        }
        function checkAnswer() {
            choices = document.getElementsByName("choices");
            for(var i=0; i<choices.length; i++) {
                if(choices[i].checked) {
                    choice = choices[i].value;
                }
            }
            if(choice == questions[pos][4]) {
                correct++;
            }
            pos++;
            renderQuestion();
        }
        window.addEventListener("load",renderQuestion,false);
    </script>
</head>
<body>
    <h2 id="test_status"></h2>
    <div id="test"></div>
</body>
</html>