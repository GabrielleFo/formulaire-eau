function hideAllFollowingQuestions(startQuestion) {
    const questions = ['yes-no-question','question1-2','checkboxes','question2', 'question3', 'question4', 'question4_1_entreprise', 'question4_1_particulier', 'question5', 'result20', 'result10'];
    const startIndex = questions.indexOf(startQuestion);
    for (let i = startIndex + 1; i < questions.length; i++) {
        document.getElementById(questions[i]).classList.add('hidden');
    }
}

function handleQuestion1(answer) {
    hideAllFollowingQuestions('question1');
    if (answer === 'yes') {
        document.getElementById('question2').classList.remove('hidden');
    } else {
        document.getElementById('question1-2').classList.remove('hidden');
    }
}
function handleSubQuestion1(answer) {
    hideAllFollowingQuestions('question1-2')
    if (answer === 'yes') {
        document.getElementById('checkboxes').classList.remove('hidden');
        document.getElementById('yes-no-question').classList.remove('hidden');
         
    } else {
      
        document.getElementById('checkboxes').classList.add('hidden');
        document.getElementById('yes-no-question').classList.add('hidden');
        document.getElementById('result0').classList.add('hidden'); // Masquer le résultat à 0%
        document.getElementById('result10').classList.add('hidden'); // Masquer le résultat à 10%
        document.getElementById('result20').classList.remove('hidden'); // Afficher le résultat à 20%
        
      
    }
}
function handleYesNo(answer) {
    // Masquer tous les résultats
    document.getElementById('result0').classList.add('hidden');
    document.getElementById('result20').classList.add('hidden');
    document.getElementById('result10').classList.add('hidden');

    // Afficher le résultat en fonction de la réponse
    if (answer === 'yes') {
        document.getElementById('result0').classList.remove('hidden');
    } 
    if (answer === 'no') {
        document.getElementById('result20').classList.remove('hidden');
    }
}


function handleQuestion2(answer) {
    hideAllFollowingQuestions('question2');
    if (answer === 'yes') {
        document.getElementById('question3').classList.remove('hidden');
    } else {
        document.getElementById('result20').classList.remove('hidden');
    }
}

function handleQuestion3(answer) {
    hideAllFollowingQuestions('question3');
    if (answer === 'yes') {
        document.getElementById('result20').classList.remove('hidden');
    } else {
        document.getElementById('question4').classList.remove('hidden');
    }
}

function handleQuestion4(answer) {
    hideAllFollowingQuestions('question4');
    if (answer === 'commune' || answer === 'ars') {
        document.getElementById('question5').classList.remove('hidden');
    } else if (answer === 'entreprise') {
        document.getElementById('question4_1_entreprise').classList.remove('hidden');
    } else if (answer === 'particulier') {
        document.getElementById('question4_1_particulier').classList.remove('hidden');
    }
}

function handleQuestion4_1(answer) {
    hideAllFollowingQuestions('question4_1_entreprise');
  
    if (answer === 'yes') {
        document.getElementById('question5').classList.remove('hidden');
    } else {
        document.getElementById('result20').classList.remove('hidden');
    }
}
function handleQuestion4_1(answer) {
    hideAllFollowingQuestions('question4_1_particulier');
  
    if (answer === 'yes') {
        document.getElementById('question5').classList.remove('hidden');
    } else {
        document.getElementById('result20').classList.remove('hidden');
    }
}

function handleQuestion5(answer) {
  
    if (answer === 'yes') {
        document.getElementById('result20').classList.remove('hidden');
        document.getElementById('result10').classList.add('hidden');
    } else {
        document.getElementById('result20').classList.add('hidden');
        document.getElementById('result10').classList.remove('hidden');
    }
}