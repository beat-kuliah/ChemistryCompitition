@extends('layouts.app')

@section('content')
<div class="container top">
    <form id="quiz" action="" method="POST">

    <input type="button" value="Add question" onclick="javascript: addQuestion();"/>

    <p>Question 1</p>
    <input type="text" name="questions[]"/>
    <p>Question 2</p>
    <input type="text" name="questions[]"/>
    <p>Question 3</p>
    <input type="text" name="questions[]"/>
    <p>Question 4</p>
    <input type="text" name="questions[]"/>
    <p></p>


    </form>
    <button type="button" onclick="addQuestion()" class="btn">remove</button>

    <center><h1>Chemistry Innovation Project</h1></center>
    <br>
    <div class="form_utama">
        <form id="form1">
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="asal_sekolah" autocomplete="off" required>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="chempaign()">Submit</button>
    </div>
</div>
<style>
    body {
        background-image: url('images/chempaign/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
<script>
    var limit = 10; // Max questions
    var count = 1; // There are 4 questions already

    function addQuestion()
    {
        // Get the quiz form element
        var quiz = document.getElementById('quiz');

        // Good to do error checking, make sure we managed to get something
        if (quiz)
        {
            if (count < limit)
            {
                // Create a new <p> element
                var newP = document.createElement('p');
                newP.innerHTML = 'Question ' + (count + 1);

                // Create the new text box
                var newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.name = 'questions[]';

                // Good practice to do error checking
                if (newInput && newP)   
                {
                    // Add the new elements to the form
                    quiz.appendChild(newP);
                    quiz.appendChild(newInput);
                    // Increment the count
                    count++;
                }

            }
            else   
            {
                alert('Question limit reached');
            }
        }
    }
</script>
@endsection