
<!DOCTYPE>
<html>
  <head>

  </head>
    <body>
      <form action="queryInsert.php" method="POST">
        Who was your professor: <br/>
        <input type="text" name="form_prof_name"> <br/>

        What course did you take: <br/>
        <input type="text" name="form_course_id"> <br/>

        How would you rate this professor overall: <br/>
        <input type="text" name="form_rating"> <br/>

        How strict do you think this professor is: <br/>
        <input type="text" name="form_difficulty"> <br/>

        Take again?: <br/>
        <input type="radio" name="form_take_again" value="YES"> <label for="YES">Yes</label> <br/>
        <input type="radio" name="form_take_again" value="NO"> <label for="NO">No</label> <br/>

        Did you take this course for credit: <br/>
        <input type="radio" name="form_credit" value="YES"> <label for="YES">Yes</label> <br/>
        <input type="radio" name="form_credit" value="NO"> <label for="NO">No</label> <br/>

        Did this professor use textbooks?: <br/>
        <input type="radio" name="form_text_book_use" value="YES"> <label for="YES">Yes</label> <br/>
        <input type="radio" name="form_text_book_use" value="NO"> <label for="NO">No</label> <br/>

        Was attendance mandatory?:<br/>
        <input type="radio" name="form_attendance" value="YES"> <label for="YES">Yes</label> <br/>
        <input type="radio" name="form_attendance" value="NO"> <label for="NO">No</label> <br/>

        What grade did you received?: <br/>
        <input type="radio" name="form_grade" value="HD"> <label for="HD">High Distinction (80-100)</label> <br/>
        <input type="radio" name="form_grade" value="DI"> <label for="DI">Distinction (70-79)</label> <br/>
        <input type="radio" name="form_grade" value="CR"> <label for="CR">Credit (60-69)</label> <br/>
        <input type="radio" name="form_grade" value="PA"> <label for="PA">Pass (50-59)</label> <br/>
        <input type="radio" name="form_grade" value="NN"> <label for="NN">Fail</label> <br/>
        <input type="radio" name="form_grade" value="WR"> <label for="WR">Withdrawn</label> <br/>

        <input type="hidden" name="form_id"> <br/>

        <input type="submit" name="submit" value="Submit survey">

      </form>

    </body>
</html>
