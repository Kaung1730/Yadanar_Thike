const questions = document.querySelectorAll('.faq');
const answers = document.querySelectorAll('.answer');

questions.forEach(function(question) {
    const btn = question.querySelector('.updown-icon');
    btn.addEventListener("click", function() {
       answers.forEach(function(item) {
            if (item !== question) {
                item.classList.remove("show-text");
            }
        })
        question.classList.toggle("show-text");
    })
})
