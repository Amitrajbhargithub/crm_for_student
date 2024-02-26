<style>
*{
    margin: 0px; 
    padding: 0px; 
    box-sizing: border-box; 
}
body {
    background: #FFF;
}
.parent-top-n {
    width: 80%;
    margin: auto;
    padding: 65px 0px 0px;
}
.parent-top-btn {
    margin-bottom: 34px;
    display: flex;
    justify-content: space-between;
}
.survey-body {
    margin-bottom: 120px;
}
.parent-top-btn button {
    border-radius: 50px;
    text-align: center;
    font-size: 16px;
    color: #392C7D;
    text-transform: capitalize;
    font-weight: 500;
    min-width: 150px;
    border: 3px solid #B4A7F5;
    padding: 10px 15px !important;
}
.container-q {
    /*width: 80%;*/
    /* max-width: 600px; */
    min-height: 380px;
    background: #fff;
    border-radius: 5px;
    /*box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);*/
    margin: auto;
}

.survey-header{
    min-height: 86px;
    border-bottom: 1px solid #ddd;
    padding: 15px 20px 10px 20px;
    display: flex;
    align-items: center;
    font-weight: bold;
}

.survey-explanation{
    min-height: 86px;
    border-top: 1px solid #ddd;
    padding: 15px 20px 10px 20px;
    display: flex;
    align-items: center;
    font-weight: bold;
}
.survey-num {
font-size: 25px;
margin-right: 8px;
}

.explanation {
font-size: 22px;
margin-right: 8px;
}

.survey-question {
font-size: 25px;
}

.explanation-details {
font-size: 16px;
}
/* BODY */
.choices {
padding: 38px;
display: flex;
flex-direction: column;
}

.question-row {
margin-bottom: 15px;
line-height: 38px;
font-size: 25px;
}

.label {
display: flex;
}

.label input[type="checkbox"] {
vertical-align: sub;
margin-right: 10px;
align-self: center;
width: 33px;
height: 20px;
}


/* FOOTER */

.survey-footer {
    padding: 20px 0px;
    padding-top: 0;
    text-align: end;
}

.nav-button {
padding: 3px 12px;
border-radius: 5px;
border:none;
background: #fff;
margin-right: 7px;
cursor: pointer;
box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6)
}
.survey-footer .nav-button {
    color: white;
    padding: 11px 12px;
    cursor: pointer;
    /* box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6); */
    border-radius: 50px;
    text-align: center;
    font-size: 16px;
    background: #392C7D;
    text-transform: capitalize;
    font-weight: 500;
    min-width: 127px;
    border: unset;
}


/* TEST COMPLETE */

h1.test-completed {
font-size: 20px;
text-align: center;
font-weight: 400;
padding-top:20px;
}

.tick {    
position: relative;
display: block;
margin: 20px auto;     
/* margin-top: 30px; */
border: 1px solid green;
width: 60px;
height: 60px;
border-radius: 50%;
}

.tick::before {
content: '';
position: absolute;
top: 16%;
left: 35%;
transform: translate(-50%, -50%);
width: 16px;
height: 32px;
border-style: solid;
border-color: green;
border-width: 0 4px 4px 0;
transform: rotate(45deg);
}

.results-info {
text-align: center;
margin-top: 20px;
}
.result-container {
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);
    margin: auto;
    width: 80%;
    
    
}
.result-info p{
    display:flex;
}
</style>

<div class="page-content">
<div class="container">
<div class="row">
  <div class="col-12">
  <div class="parent-top-n">
@if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
@endif
<div class="parent-top-btn">
<a href="{{ url('student/test-series') }}"><button style="padding: 7px 47px;" type="button" class="btn btn-warning">EXIT</button></a>

<button id="demo" style="padding: 7px 47px;" type="button" class="btn btn-warning"><span id="time-text"></span><span id="time-remaining"></span></button></div>
<!--=================Start Test series question=================-->
<div class="container-q">
    <div class="survey-header">
        <span class="survey-num">1-</span>
        <p class="survey-question">How long have you been here ?</p>
    </div>
    <div class="survey-body">
        <div class="choices" id="QA">
    </div>
    <!-- <div class="survey-explanation">
        <span class="explanation">Explanation </span>
        <p class="explanation-details">Demo Test</p>
    </div> -->
</div>
<div class="survey-footer">
    <div class="nav-buttons"></div>
</div>

</div>
<!--=================End Test series question=================-->
</div>
</div> 
  <div class="col-12 result-container"></div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

var array_time = [];
var array_checkbox_data = [];
var currentpagination = 0;
// var initialSeconds = 0;
var currentIndex = 0;

// Calculate the total countdown time in milliseconds
// var countDownTime = initialMinutes * 60 * 1000 + initialSeconds * 1000;

// // Function to update the countdown timer
// function updateCountdown() {

//     var new_time = countDownTime;


//     // Time calculations for minutes and seconds
//     var minutes = Math.floor(countDownTime / (1000 * 60));
//     var seconds = Math.floor((countDownTime % (1000 * 60)) / 1000);
    
//     if (countDownTime <= 0) {
//         clearInterval(x)
//     }
//     // // Decrease the countdown time by 1 second
//     countDownTime -= 1000;

// }

// Initial update
// updateCountdown();

// Update the countdown every 1 second
// var x = setInterval(updateCountdown, 1000);

const questionEl = document.querySelector('.survey-question')
// const explanationDetails = document.querySelector('.explanation-details')
const surveyNumEl = document.querySelector('.survey-num')
const choicesEl = document.querySelector('.choices')
const buttonEl = document.querySelector('.nav-buttons')
const containerEl = document.querySelector('.result-container')
const survey = <?php echo json_encode($question_array)?>;

const surveyState = { currentQuestion: 1 }

// click event for next and previous
const navigateButtonClick = (e) => {
    if (e.target.id === 'next') {

        /************************Set Time*****************************/
        var timeRemaining = document.getElementById("time-remaining").textContent;

        if(array_time.at(currentIndex)!=undefined) {
            array_time[currentIndex] = timeRemaining;
        } else {
            array_time.push(timeRemaining); 
        }
        /*********************End Time section********************/

        /**************************Set Checkbox value***************/
            var checkBoxvalue = $('input[name="choice'+surveyState.currentQuestion+'"]:checked').val();
            if(array_checkbox_data.at(currentIndex)!=undefined) {
                if(checkBoxvalue==undefined) { 
                        array_checkbox_data[currentIndex]='';  
                } else {
                    array_checkbox_data[currentIndex]=checkBoxvalue;  
                }
            } else {
                if(checkBoxvalue==undefined) { 
                    array_checkbox_data.push('');
                } else {
                    array_checkbox_data.push(checkBoxvalue);
                }
            }      
        /***********************END checkbox value******************************/

        /*****************Increment Index****************/
            currentIndex++;
        /*********************************/

        surveyState.currentQuestion++;
    } else if (e.target.id === 'prev') {
        /*****************Decrement Index****************/
            currentIndex--;
        /*********************************/
        currentpagination = surveyState.currentQuestion--;

    }

    initialSurvey();

    const currentQuestion = surveyState.currentQuestion;
    if (currentQuestion >= 0 && currentQuestion < questions.length) {
        const timeLimit = questions[currentQuestion].time * 60;
        startTimer(timeLimit);
    }
}

const checkBoxHandler = (e, question) => {    
    //Check if the chekbox has selected before if it is remove selected
    if(!e.target.checked) {
        e.target.checked = false
        question.answer = null
        return
    }
    const allCheckBoxes = choicesEl.querySelectorAll('input')
    allCheckBoxes.forEach(checkBox => checkBox.checked = false)
    e.target.checked = true
    question.answer = e.target.value    
}

const getResults = () => {
    const correctAnswerCount = survey.filter(question => question.answer == question.correctAnswer).length;
    const emptyQuestionCount = survey.filter(question => question.answer === null).length;
    const wrongQuestions = survey.filter(question => question.answer !== null && question.answer != question.correctAnswer);
    const wrongQuestionCount = wrongQuestions.length;

    return {
        correct: correctAnswerCount,
        empty: emptyQuestionCount,
        wrong: wrongQuestionCount,
        wrongQuestions: wrongQuestions, 
    };
    
}


const renderQuestion = (question) => { 
   
    var Questions = <?php echo json_encode($question_array)?>;
    // console.log(Questions);
    const questionTimes = Questions.map(question => question.time);
    // console.log(questionTimes);
    //Last question of survey
    const lastQuestion = survey[survey.length - 1]

    //Check if the all questions are answered if then insert some message
    if(surveyState.currentQuestion > lastQuestion.id) {
        $(".container-q").css("display","none");
        const results = getResults()
        var countDownTime= 60;
        var initialMinutes = 60;
        var minutes2 = Math.floor(countDownTime / (1000 * 60));
        var seconds2 = Math.floor((countDownTime % (1000 * 60)) / 1000);
        var minute3= (initialMinutes-minutes2)-1;
        var seconds3= (60-seconds2);

        /***************************/
            var id =currentpagination-1;
            var time_index =id-1;
            var remaining_time = array_time.at(time_index);

            var new_time = seconds3;
            if(remaining_time!=undefined) {
                taken_time = remaining_time.slice(0,-1);
                new_time = parseInt(taken_time);
            } 
        /****************************/
        if(seconds3 > 60){
            var seconds3=0;
        }
        // clearInterval(x); 
        // stopTimer();
        document.getElementById("demo").textContent ='Submitted';
        containerEl.innerHTML = `
            <h1 class="test-completed">Good Job! You have completed the mini quiz</h1>
            <p class="results-info"> You have <strong>${results.correct}</strong> correct, <strong>${results.wrong}</strong> wrong, <strong>${results.empty}</strong> empty answers</p>
            <p class="results-info"> Total Time: <strong>${initialMinutes} minutes 0 seconds</strong></p>
            <p class="results-info"> Time taken: <strong>${minute3} minutes ${seconds3} seconds</strong></p>
        `;

        if (results.wrong > 0) {
            containerEl.innerHTML += "<h2 class='results-info'>Incorrect Answers:</h2>";

            results.wrongQuestions.forEach((question, index) => {
                containerEl.innerHTML += `
                    <div class="incorrect-answer mb-5">
                        <p class="results-info"><strong>Question ${index + 1}:</strong> ${question.question}</p>
                        <p class="results-info"><strong>Your Answer:</strong> ${question.answer}</p>
                        <p class="results-info "><strong>Correct Answer:</strong> ${question.correctAnswer}</p>
                    </div>
                `;
            });
        }
    }

    // Clean innerHTML before append
    surveyNumEl.innerHTML = ''
    // surveyNumtime.innerHTML = ''
    choicesEl.innerHTML = ''
    buttonEl.innerHTML = ''
    // Render question and question id 
    surveyNumEl.textContent = question.id + '-'
    questionEl.textContent = question.question
    /*************Pregmatch String***********/
    // var string = question.explanation.replace("<p>",'');
    // var newString = string.replace("</p>",'');
    // /****************************************/
    // explanationDetails.textContent = newString

    // Render choices
    question.choices.forEach(choice => {
    const questionRowEl = document.createElement('p')
    questionRowEl.setAttribute('class','question-row')
    const choiceClass = `choice${question.id}`;
    questionRowEl.innerHTML = `<label class="label ${choiceClass}">
            <span class="choice ${choiceClass}">${choice}</span>
        </label>`;
    //Create checkbox input
    const checkBoxEl = document.createElement('input')
    checkBoxEl.classList.add(`${choiceClass}`);
    checkBoxEl.setAttribute('type', 'checkbox')
    checkBoxEl.setAttribute('name', `${choiceClass}`)
    checkBoxEl.setAttribute('id', `${choiceClass}`)

    // Bind checkboxHandler with event and current question
    checkBoxEl.addEventListener('change', (e) => checkBoxHandler(e, question))
    //Add answer to the input as a value
    checkBoxEl.value = choice
    //If question has answer already make it checked again
    if(question.answer === choice) {
        checkBoxEl.checked = true
    }
    //Insert into question row
    questionRowEl.firstChild.prepend(checkBoxEl)
    //Insert row to the wrapper
    choicesEl.appendChild(questionRowEl)                                    
    })

    //Next & Previous Buttons
    const prevButton = document.createElement('button')
    prevButton.classList.add('nav-button')
    prevButton.classList.add('prev')
    prevButton.id = 'prev'
    prevButton.textContent = 'Previous'
    prevButton.addEventListener('click', navigateButtonClick)

    const nextButton = document.createElement('button')
    nextButton.classList.add('nav-button')
    nextButton.classList.add('next')
    nextButton.id = 'next'
    nextButton.textContent = 'Next'
    nextButton.addEventListener('click', navigateButtonClick)
    //Display buttons according to survey current question
    if(question.id == 1){        
    buttonEl.appendChild(nextButton)
    } else if (surveyState.currentQuestion == lastQuestion) {
    buttonEl.appendChild(prevButton)
    } else {
    buttonEl.appendChild(prevButton)
    buttonEl.appendChild(nextButton)
    }   
}
function clickNextButton() {
    const nextButton = document.querySelector(".nav-button.next");

    // Trigger a click event on the button
    if (nextButton) {
        nextButton.click();
    }
}
const initialSurvey = () => {
    //Get the current question
    const currentQuestion = survey.find(question => question.id === surveyState.currentQuestion)
    // Render the currentQuestion
    renderQuestion(currentQuestion)    
}
initialSurvey()

// JavaScript code for the timer and question management
const questions = <?php echo json_encode($question_array)?>;
let currentQuestionIndex = 0;
let currentTimer;
let timerExpired = false;

function displayQuestion(index) {
    const questionText = questions[index].text;
    const timeLimit = questions[index].time * 60; 
    startTimer(timeLimit);
}

function startTimer(timeLimit) {

    var id = currentpagination-1;
    var index = id-1;
    var checkbox_Value1 = $("input[name='choice"+id+"']").map(function(){return $(this).val()}).get();
    
    if(array_checkbox_data.at(currentIndex)!=undefined & array_checkbox_data.at(currentIndex) !='') {
        var updateCurrentIndex = currentIndex+1;
        $('.choice'+updateCurrentIndex).attr('disabled','disabled');
    }

    let timeRemaining = timeLimit;
    var id =currentpagination-1;
    var time_index =id-1;
    var remaining_time = array_time.at(currentIndex);
    var new_time = timeRemaining;
    if(remaining_time!=undefined) {
        taken_time = remaining_time.slice(0,-1);
        new_time = parseInt(taken_time);
    } 


    clearInterval(currentTimer);
    if(array_checkbox_data.at(currentIndex)!=undefined & array_checkbox_data.at(currentIndex) !='') {
        updateTimerDisplay(new_time);
    } else {
        updateTimerDisplay(new_time);

        currentTimer = setInterval(function () {
            new_time--;

            if (new_time < 0) {
                clearInterval(currentTimer);
                surveyState.currentQuestion++;
                initialSurvey();
                timerExpired = true;
                switchToNextQuestion();
            } else {
                updateTimerDisplay(new_time);
            }
        }, 1000);
    }
}


function updateTimerDisplay(timeRemaining) {
    const minutes = Math.floor(timeRemaining / 60);
    const seconds = timeRemaining % 60;
    // document.getElementById("time-text").textContent = `Time Remaining: ${minutes}m`;
    // document.getElementById("time-remaining").textContent = ` ${seconds}s`;
}

function switchToNextQuestion() {
    if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        displayQuestion(currentQuestionIndex);
        timerExpired = false;
    } else {
        // alert("Quiz Completed!");
    }
}
// function stopTimer() {
//     clearInterval(currentTimer); 
// }

document.getElementById("next").addEventListener("click", function () {
    switchToNextQuestion();
});


displayQuestion(currentQuestionIndex);
</script>

