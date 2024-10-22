const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;

        // Close all open answers except the one clicked
        document.querySelectorAll('.faq-answer').forEach(a => {
            if (a !== answer) {
                a.style.maxHeight = null;
            }
        });

        // Toggle open/close for the clicked answer
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
        } else {
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
});
