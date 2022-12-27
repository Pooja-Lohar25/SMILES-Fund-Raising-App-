
       enroll();
      function enroll()
      {
        if(true)
        {
         // document.getElementById("quizLink").setAttribute("href","techQuiz.php");
          document.getElementById("enrol").innerHTML = "Enrolled";
          document.getElementById("msg").innerHTML = " ";
          alert("runnig");
        }
        else{
          document.getElementById("enrol").innerHTML = "Enroll Now";
          document.getElementById("msg").innerHTML = "Kindly enroll to attempt the quiz.";
          alert("else part");
        }
          
      }
     